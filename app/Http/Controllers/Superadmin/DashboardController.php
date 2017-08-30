<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends AdminBaseController
{
    protected $middleware;
    function __construct()
    {
        //dd(Auth::user());
      $this->middleware('superadmin');
    }

    public function index()
    {
        return view('superadmin.dashboard.index');
    }
}
