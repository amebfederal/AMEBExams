<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccountHoldersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //Auth::logout();
        //dd(Auth::guard('superadmin')->check());

        Auth::guard('accountholders');
        $user = Auth::user();
        if( Auth::guard($guard)->check()) {
            if (empty($user) || $user->user_type != 'teacher' || $user->user_type != 'parent' || $user->user_type != 'adult_learner' || $user->user_type != 'student')
            {
                if (!strstr($request->url(), 'login'))
                {
                    return redirect('/account-holders/login');

                }
            }
        }

        else
        {
            if (!strstr($request->url(), 'login'))
                return redirect('/account-holders/login');
        }



        return $next($request);
}
}
