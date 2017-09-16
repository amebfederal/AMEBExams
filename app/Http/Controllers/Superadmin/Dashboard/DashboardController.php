<?php

namespace App\Http\Controllers\SuperAdmin\Dashboard;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends AdminBaseController
{

    function __construct()
    {

        $this->middleware('superadmin');
    }

    public function index()
    {
        return view('superadmin.dashboard.index');
    }
}
