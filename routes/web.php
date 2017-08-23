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
Route::get('superadmin/state/add',    function () {
    return view('superadmin.state.add');
});
Route::get('superadmin/state/manage',    function () {
    return view('superadmin.state.manage');
});
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