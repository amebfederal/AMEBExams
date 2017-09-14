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

/*Route::get('super-admin/dashboard',    function () {
    return view('superadmin.dashboard.index');
});*/


/*
******************************************************************************************* 

Super Admin Holders Route  

*******************************************************************************************
*/


Route::group(['middleware' => 'superadmin', 'prefix' => 'super-admin'], function ($router) {

    $router->get('sub-category', 'SuperAdmin\Product\SubCategoryController@index');
    $router->get('grade', 'SuperAdmin\Product\GradeController@index');

    $router->resource('category', 'SuperAdmin\Product\CategoryController');
    $router->resource('category.sub-category', 'SuperAdmin\Product\SubCategoryController');
    $router->resource('state', 'SuperAdmin\State\StateController');
    $router->resource('account', 'SuperAdmin\Account\AccountController');
    $router->resource('sub-category.grade', 'SuperAdmin\Product\GradeController');
    $router->resource('session', 'SuperAdmin\Session\SessionController');
    $router->resource('online-examination', 'SuperAdmin\Product\OnlineExaminationController');
    $router->get('superadmin/product/{id}/exam-price', ['as' => 'product.manage-price', 'uses' => 'SuperAdmin\Product\OnlineExaminationController@managePrice']);

    $router->post('superadmin/product/{id}/exam-price',
        ['as' => 'product.save-price', 'uses' => 'SuperAdmin\Product\OnlineExaminationController@savePrice']);

    $router->resource('practice-exam', 'SuperAdmin\PracticeExam\PracticeExaminationController');
});


Route::group(['middleware' => 'superadmin', 'prefix' => 'api'], function ($router) {
    $router->resource('sub-category.api-grade', 'Api\GradeController', ['only' => ['index']]);
});


Route::group(['middleware' => 'superadmin',  'prefix'=>'super-admin'], function ($router) {

    Route::get('dashboard',
        ['as' => 'superadmin.dashboard',  'uses' => 'Superadmin\Dashboard\DashboardController@index']);
    Route::get('login',
        ['as' => 'superadmin.login',  'uses' => 'Auth\SuperadminLoginController@showLoginForm']);
    Route::get('logout',
        ['as' => 'superadmin.logout',  'uses' => 'Auth\SuperadminLoginController@logout']);
    Route::post('login',
        ['as' => 'superadmin.login',  'uses' => 'Auth\SuperadminLoginController@login']);


    $router->resource('admin-setting', 'Superadmin\AdminSetting\AdminSettingController');
    $router->resource('course', 'Superadmin\Course\CourseController');
    $router->resource('faq', 'Superadmin\Faq\FaqController');
    $router->resource('faq-category', 'Superadmin\Faq\FaqCategoryController');
    $router->resource('course.lesson', 'Superadmin\Lesson\LessonController');

/*    $router->get('course/{slug}/lesson/create',[ 'as'=> 'lesson.create', 'uses'=> 'Superadmin\Lesson\LessonController@create' ]);
    $router->get('course/{slug}/lesson',[ 'as'=> 'lesson.index', 'uses'=> 'Superadmin\Lesson\LessonController@index' ]);
    $router->post('course/{slug}/lesson/store',[ 'as'=> 'lesson.store', 'uses'=> 'Superadmin\Lesson\LessonController@store' ]);
    $router->get('course/{slug}/{id}/lesson/edit',[ 'as'=> 'lesson.edit', 'uses'=> 'Superadmin\Lesson\LessonController@edit' ]);
    $router->patch('course/{slug}/{id}/lesson/update',[ 'as'=> 'lesson.update', 'uses'=> 'Superadmin\Lesson\LessonController@update' ]);
    $router->delete('course/{slug}/{id}/lesson/destroy',[ 'as'=> 'lesson.destroy', 'uses'=> 'Superadmin\Lesson\LessonController@destroy' ]);*/

    $router->get('superadmin/course/{id}/course-price', ['as' => 'course.manage-price', 'uses' => 'SuperAdmin\Course\CourseController@managePrice']);
    $router->post('superadmin/course/{id}/course-price',
        ['as' => 'course.save-price', 'uses' => 'SuperAdmin\Course\CourseController@savePrice']);

    Route::get('admin-setting/{id}/change-password',
        ['as'=>'admin-setting.change-password', 'uses'=>'Superadmin\AdminSetting\AdminSettingController@showPasswordChangeForm' ]);
    Route::post('admin-setting/{id}/change-password',
        ['as'=>'admin-setting.change-password', 'uses'=>'Superadmin\AdminSetting\AdminSettingController@passwordChange' ]);

    Route::post('course/get-subcat',
        ['as'=>'course.getsubcat', 'uses'=>'Api\CourseController@showSubCategory']);
    Route::post('course/get-grade',
        ['as'=>'course.getGrade', 'uses'=>'Api\CourseController@showGrade']);

});

Route::get('superadmin/user/manage',    function () {
    return view('superadmin.user.index');
});
Route::get('superadmin/candidate/manage',    function () {
    return view('superadmin.candidate.index');
});
Route::get('superadmin/marker/manage',    function () {
    return view('superadmin.marker.index');
});
Route::get('superadmin/administrator/manage',    function () {
    return view('superadmin.administrator.index');
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
Route::group(['before' => 'auth', 'prefix' => 'super-admin'], function ($router) {

    $router->resource('venue', 'SuperAdmin\Venue\VenueController');

});

Route::get('superadmin/federal/office',    function () {
    return view('superadmin.federal.office');
});
Route::get('superadmin/adminlogin/add',    function () {
    return view('superadmin.admin-login.create');
});
Route::get('superadmin/adminlogin/manage',    function () {
    return view('superadmin.admin-users.index');
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

Route::get('Account/register/address-verification', 'AccountHolder\Register\RegisterController@create');
Route::get('Account/register/register', 'AccountHolder\Register\RegisterController@register');
Route::post('Account/register/do-register',
    ['as' => 'do-register', 'uses' => 'AccountHolder\Register\RegisterController@doRegister']);
Route::get('user/activation/{token}', 'AccountHolder\Register\RegisterController@activateUser')->name('user.activate');

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


