<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('superadmin/dashboard',    function () {
    return view('superadmin.dashboard.index');
});*/


/*
******************************************************************************************* 

Super Admin Holders Route  

*******************************************************************************************
*/


Route::group(['before' => 'auth', 'prefix' => 'super-admin'], function ($router) {

    $router->resource('product-category', 'SuperAdmin\Product\ProductCategoryController');

});



Route::get('superadmin/dashboard',
            ['as' => 'superadmin.dashboard',  'uses' => 'SuperAdmin\DashboardController@index']);

Route::get('superadmin/product/addstep1',
            ['as' => 'superadmin.product.addproductstep1',        'uses' => 'SuperAdmin\ProductController@addproductstep1']);

Route::get('superadmin/product/addstep2',
    ['as' => 'superadmin.product.addproductstep2',        'uses' => 'SuperAdmin\ProductController@addproductstep2']);

Route::get('superadmin/product/manage',
    ['as' => 'superadmin.product.manageproduct',        'uses' => 'SuperAdmin\ProductController@manageproduct']);

Route::get('superadmin/user/manageenrollers',    function () {
    return view('superadmin.users.index');
});
Route::get('superadmin/support/viewenrollerrefund',    function () {
    return view('superadmin.support.viewenrollerrefund');
});
Route::get('superadmin/support/viewenrollerextension',    function () {
    return view('superadmin.support.viewenrollerextension');
});
Route::get('superadmin/support/support',    function () {
    return view('superadmin.support.support');
});
Route::get('superadmin/reports/reports/manage',    function () {
    return view('superadmin.reports.managereports');
});
Route::get('superadmin/page/add',    function () {
    return view('superadmin.pages.add');
});
Route::get('superadmin/page/manage',    function () {
    return view('superadmin.pages.manage');
});
Route::get('superadmin/faq/add',    function () {
    return view('superadmin.faq.add');
});
Route::get('superadmin/faq/manage',    function () {
    return view('superadmin.faq.manage');
});
Route::get('superadmin/faq/category',    function () {
    return view('superadmin.faq.category');
});
Route::get('superadmin/banner/add',    function () {
    return view('superadmin.banner.add');
});
Route::get('superadmin/banner/manage',    function () {
    return view('superadmin.banner.manage');
});

Route::get('superadmin/settings/general',    function () {
    return view('superadmin.settings.general');
});
Route::get('superadmin/settings/social',    function () {
    return view('superadmin.settings.social');
});
Route::group(['before' => 'auth', 'prefix' => 'super-admin'], function ($router) {

    $router->resource('state', 'SuperAdmin\State\StateController');

});
//Route::get('superadmin/state/add',    function () {
    //return view('superadmin.state.add');
//});
//Route::get('superadmin/state/manage',    function () {
    //return view('superadmin.state.manage');
//});

Route::get('superadmin/federal/office',    function () {
    return view('superadmin.federal.office');
});
Route::get('superadmin/adminlogin/add',    function () {
    return view('superadmin.adminlogin.add');
});
Route::get('superadmin/adminlogin/manage',    function () {
    return view('superadmin.adminlogin.manage');
});
Route::get('superadmin/payments/manage',    function () {
    return view('superadmin.payments.manage');
});

/*
*******************************************************************************************

Candidate Holders Route

*******************************************************************************************
*/

Route::get('candidate/profile/profile',    function () {
    return view('candidate.profile.profile');
});
Route::get('candidate/realexam/realexam',    function () {
    return view('candidate.realexam.realexam');
});
Route::get('candidate/practiceexam/practiceexam',    function () {
    return view('candidate.practiceexam.practiceexam');
});
Route::get('candidate/startexam/startexam',    function () {
    return view('candidate.startexam.startexam');
});



/*
******************************************************************************************* 

Account Holders Route  

*******************************************************************************************
*/


Route::get('accountholders/dashboard',    function () {
    return view('accountholders.dashboard.index');
});

Route::get('accountholders/notifications',    function () {
    return view('accountholders.notifications.index');
});

Route::get('accountholders/exams/category',    function () {
    return view('accountholders.exams.viewcategory');
});

Route::get('accountholders/exams/products',    function () {
    return view('accountholders.exams.viewproducts');
});

Route::get('accountholders/exams/view',    function () {
    return view('accountholders.exams.viewsingle');
});

Route::get('accountholders/payment/cart',    function () {
    return view('accountholders.payment.cart');
});

Route::get('accountholders/profile/manageexams',    function () {
    return view('accountholders.profile.manageexams');
});

Route::get('accountholders/support/manage',    function () {
    return view('accountholders.support.manage');
});


