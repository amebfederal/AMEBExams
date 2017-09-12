<?php

namespace App\Mail;

use App\Modules\Models\AccountHolder;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountHolderRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $accountHolder;
    public $link;

    /**
     * @param AccountHolderService $accountHolder
     */
    public function __construct(
        AccountHolder $accountHolder, $link
    )
    {
        $this->accountHolder = $accountHolder;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Account-holder-registered')
            ->from('bhatta.bj@gmail.com');
    }
}
