<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Auth\SuperadminLoginController;
use Closure;
use Illuminate\Support\Facades\Auth;
class SuperadminMiddleware
{
    protected  $login;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    function __construct(SuperadminLoginController $login)
    {
        $this->login=$login;

    }

    public function handle($request, Closure $next, $guard = null)
    {
        //Auth::logout();
        //dd(Auth::guard('superadmin')->check());

        Auth::guard('superadmin');
        $user = Auth::user();
        if( Auth::guard($guard)->check())
        {
            if (empty($user) || $user->user_type != 'superadmin') {
                if (!strstr($request->url(), 'login'))
                    return redirect('/super-admin/login');

            } else {
                $this->login->updateLastLogin();
            }
        }
        else
        {
            if (!strstr($request->url(), 'login'))
                return redirect('/super-admin/login');
        }



        return $next($request);

    }







}
