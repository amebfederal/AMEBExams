<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Modules\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SuperadminLoginController extends Controller
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
    protected $redirectTo = '/super-admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('superadmin', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        //dd('here');
        $user = Auth::user();
        if(empty($user) || $user->user_type!='superadmin')
            return view('superadmin.login.login');
        if(!empty($user) && $user->user_type=='superadmin')
            return Redirect::route('superadmin.dashboard');

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

        return redirect('/super-admin/login');
    }





}
