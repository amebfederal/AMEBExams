<?php

namespace App\Http\Controllers\Accountholder\Register;

use App\Http\Requests\AccountHolderRequest;
use App\Http\Requests\AddressVerificationRequest;
use App\Modules\Services\AccountHolder\AccountHolderService;
use App\Modules\Services\Option\CountryService;
use App\Modules\Services\State\StateService;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    protected $state;
    protected $account;
    protected $country;

    function __construct(
        StateService $state,
        CountryService $country,
        AccountHolderService $account
    )
    {
        $this->state = $state;
        $this->country = $country;
        $this->account = $account;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = $this->state->all();
//        $countries = $this->country->syncCountries();
        $countries = $this->country->all();

        return view('frontend-account.register.address-verification',
            compact('states', 'countries'));
    }

    public function register(AddressVerificationRequest $request){
        $data = $request->all();

        $countries = $this->country->all();
        $states = $this->state->all();

        return view('frontend-account.register.register', compact('data', 'countries', 'states'));
    }

    public function doRegister(AccountHolderRequest $request)
    {
        if($this->account->create($request->all())){

        }
    }
}
