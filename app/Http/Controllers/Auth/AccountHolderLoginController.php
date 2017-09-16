<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Modules\Models\AccountHolder;
use App\Modules\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AccountHolderLoginController extends Controller
{
    protected $model;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;



    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/account-holders/dashboard';
    protected $guard = 'accountholders';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AccountHolder $account)
    {
        $this->middleware('accountholders', ['except' => 'logout']);
        $this->model = $account;

    }

    public function showLoginForm()
    {
        //dd('here');
        $user = Auth::user();
        if (empty($user) || $user->user_type != 'teacher' || $user->user_type != 'parent' || $user->user_type != 'adult_learner' || $user->user_type != 'student')
            return view('accountholders.login.login');
       if(!empty($user) && $user->user_type=='teacher' || $user->user_type != 'parent' || $user->user_type != 'adult_learner' || $user->user_type != 'student')
            return Redirect::route('accountholders.dashboard');

    }


    public function updateLastLogin()
    {   $user = Auth::user();
        $id = $user->id;
        $this->model = User::find($id);
        $this->model->last_logged_in = Carbon::now();
        $this->model->save();

    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return route('accountholders.login');
    }

    public function login(Request $request)
    {
       //dd($request->all());



        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            dd('here');
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }





}
