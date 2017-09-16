<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends AdminBaseController
{
    //
    public function addproductstep1()
    {
        return view('superadmin.product.addproductstep1');
    }

    public function addproductstep2()
    {
        return view('superadmin.product.addproductstep2');
    }

    public function manageproduct()
    {
        return view('superadmin.product.index');
    }
}
