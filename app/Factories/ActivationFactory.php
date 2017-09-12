<?php

namespace App\Factories;

use App\Mail\AccountHolderRegistered;
use App\Modules\Models\AccountHolder;
use App\Repositories\AccountHolderActivationRepository;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class ActivationFactory
{
    protected $activationRepo;
    protected $mailer;
    protected $resendAfter = 24;
    protected $accountHolder;

    public function __construct(AccountHolderActivationRepository $activationRepo,
                                Mailer $mailer, AccountHolder $accountHolder
    )
    {
        $this->activationRepo = $activationRepo;
        $this->mailer = $mailer;
        $this->accountHolder = $accountHolder;
    }

    public function sendActivationMail($user)
    {
        if ($user->activated || !$this->shouldSend($user)) {
            return;
        }

        $token = $this->activationRepo->createActivation($user);

        $link = route('user.activate', $token);
        Mail::to($user->email)->send(new AccountHolderRegistered($user, $link));
//        Mail::pretend(new AccountHolderRegistered($user, $link));
    }

    public function activateUser($token)
    {
        $activation = $this->activationRepo->getActivationByToken($token);

        if ($activation === null) {
            return null;
        }

        $user = $this->accountHolder->find($activation->account_holder_id);

        $user->activated = true;

        $user->save();

        $this->activationRepo->deleteActivation($token);

        return $user;
    }

    private function shouldSend($user)
    {
        $activation = $this->activationRepo->getActivation($user);
        return $activation === null || strtotime($activation->created_at) + 60 * 60 * $this->resendAfter < time();
    }
}