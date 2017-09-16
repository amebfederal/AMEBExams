<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends AdminBaseController
{
    //
    public function index()
    {
        return view('superadmin.dashboard.index');
    }
}
