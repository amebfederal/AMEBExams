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
      // dd(Auth::user());

        $auth = Auth::guard('superadmin');
        //dd($auth);
        if ($auth->check() && Auth::user()->user_type =='superadmin') {


        }
        else
        {

           // Auth::logout();
           // return redirect('/superadmin/login');
        }

        return $next($request);



    }







}
