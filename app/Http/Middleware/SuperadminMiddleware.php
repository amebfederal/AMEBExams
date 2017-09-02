<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class SuperadminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if (empty($user) || $user->user_type != 'superadmin') {
            if(!strstr($request->url(), 'login'))
                return redirect('/superadmin/login');
        }

        return $next($request);

    }







}
