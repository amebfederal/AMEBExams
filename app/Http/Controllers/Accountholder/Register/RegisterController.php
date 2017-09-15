<?php

namespace App\Http\Controllers\AccountHolder\Register;

use App\Factories\ActivationFactory;
use App\Http\Requests\AccountHolderRequest;
use App\Http\Requests\AddressVerificationRequest;
use App\Modules\Services\AccountHolder\AccountHolderService;
use App\Modules\Services\Option\CountryService;
use App\Modules\Services\State\StateService;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class RegisterController extends Controller
{
    protected $state;
    protected $account;
    protected $country;

    use AuthenticatesUsers;

    protected $activationFactory;

    private $redirectTo = '/';

    function __construct(
        StateService $state,
        CountryService $country,
        AccountHolderService $account,
        ActivationFactory $activationFactory
    )
    {
//        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);

        $this->state = $state;
        $this->country = $country;
        $this->account = $account;

        $this->activationFactory = $activationFactory;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = $this->state->all();
        //$countries = $this->country->syncCountries();
        $countries = $this->country->all();

        return view('frontend-Account.register.address-verification',
            compact('states', 'countries'));
    }

    public function register(AddressVerificationRequest $request){
        $data = $request->all();

        $countries = $this->country->all();
        $states = $this->state->all();

        return view('frontend-Account.register.register', compact('data', 'countries', 'states'));
    }

    public function doRegister(AccountHolderRequest $request)
    {
        if($account = $this->account->create($request->all())){
//            $Account = $this->Account->find($Account->id);
            $this->activationFactory->sendActivationMail($account);

            return redirect()->to('accountholders/dashboard');
        }
    }

    public function activateUser($token)
    {
        if ($user = $this->activationFactory->activateUser($token)) {
            auth()->login($user);
            return redirect($this->redirectPath());
        }
        abort(404);
    }

    public function authenticated(Request $request, $user)
    {
        if (!$user->activated) {
            $this->activationFactory->sendActivationMail($user);
            auth()->logout();
            return back()->with('activationWarning', true);
        }
        return redirect()->intended($this->redirectPath());
    }
}
