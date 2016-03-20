<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


use App\City;
use App\State;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {

    Route::get('/admin', function () {
        return view('admin.home');
    })->name('home');

    Route::post('/signup', [
        'uses' => 'admin\UserController@postSignUp',
        'as' => 'signup'
    ]);
    Route::post('/signin', [
        'uses' => 'admin\UserController@postSignIn',
        'as' => 'signin'
    ]);
    Route::get('/admin/logout', [
        'uses' => 'admin\UserController@logout',
        'as' => 'signin'
    ]);
    Route::get('/admin/profile', [
        'uses' => 'admin\LinkController@getProfile',
        'as' => 'profile',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::post('admin/editProfile', [
        'uses' => 'admin\ProcessFormController@editProfile',
        'as' => 'editProfile',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::put('admin/addLogo', [
        'uses' => 'admin\ProcessFormController@logo',
        'as' => 'addLogo',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);

    Route::get('/admin/dashboard', [
        'uses' => 'admin\UserController@getDashboard',
        'as' => 'dashboard',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);

    Route::get('admin/subscriptions', [
        'uses' => 'admin\LinkController@getSubscription',
        'as' => 'subscriptions',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/invoice/{type}', [
        'uses' => 'admin\LinkController@getInvoice',
        'as' => 'subscriptions',
        'middleware' => 'auth',
        'middleware' => 'admin',


    ]);

    Route::get('admin/addnew', [
        'uses' => 'admin\LinkController@addNew',
        'as' => 'addnew',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/addnewComplex', [
        'uses' => 'admin\LinkController@addNewComplex',
        'as' => 'addnew',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/ajax/state',[
        'uses' => 'admin\AjaxController@getState',
        'as' => 'getstate',
        'middleware' => 'auth',

    ] );


    Route::get('admin/ajax/state',[
        'uses' => 'admin\AjaxController@getState',
        'as' => 'getstate',
        'middleware' => 'auth',

    ] );

    Route::get('admin/ajax/city', [
        'uses' => 'admin\AjaxController@getCity',
        'as' => 'getcity',
        'middleware' => 'auth',

    ]);
    Route::get('admin/ajax/locatinoid', [
        'uses' => 'admin\AjaxController@getLocationbyId',
        'as' => 'getLocationbyId',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);

    Route::post('admin/savelocation', [
        'uses' => 'admin\ProcessFormController@saveLocation',
        'as' => 'saveLocation',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::post('admin/editlocation', [
        'uses' => 'admin\ProcessFormController@editLocation',
        'as' => 'editLocation',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/deletelocation/{id}', [
        'uses' => 'admin\ProcessFormController@deleteLocation',
        'as' => 'deleteLocation',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::post('admin/saveinvoice', [
        'uses' => 'admin\ProcessFormController@postInvoice',
        'as' => 'saveInvoice',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::post('admin/paypalPayment', [
        'uses' => 'admin\ProcessFormController@postInvoicePaypal',
        'as' => 'saveInvoicePaypal',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/sucessPaypal', [
        'uses' => 'admin\ProcessFormController@successPaypal',
        'as' => 'successPaypal',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/invoices', [
            'uses' => 'admin\LinkController@getInvoices',
        'as' => 'getInvoices',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);

    Route::get('admin/pdf/{invoiceno}', [
        'uses' => 'admin\PdfInvoice@createInvoice',
        'as' => 'pdfInvoice',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    //add vouchers
    Route::post('admin/addnewSimpleVoucher', [
        'uses' => 'admin\AddnewSimpleVoucher@addnew',
        'as' => 'pdfInvoice',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);

    Route::post('admin/addnewComplexVoucher', [
        'uses' => 'admin\AddnewComplexVoucher@addnew',
        'as' => 'pdfInvoice',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    //end add vouchers
    Route::get('admin/allvouchers', [
        'uses' => 'admin\LinkController@getAllVouchers',
        'as' => 'pdfInvoice',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/removecoupon/{id}', [
        'uses' => 'admin\RemoveVoucher@delete',
        'as' => 'removeCoupon',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ]);
    Route::get('admin/ajax/getAllVouchers',[
        'uses' => 'admin\AjaxController@getallCoupons',
        'as' => 'getallCoupons',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ] );


    Route::get('admin/couponWon',[
        'uses' => 'admin\linkController@getCouponWon',
        'as' => 'couponWon',
        'middleware' => 'auth',
        'middleware' => 'admin',
    ] );
});
//-------------------- FRONT END -----------------------------
Route::group(['middleware' => ['web']], function () {
    Route::get('auth/facebook', 'front\AuthController@redirectToProvider');
    Route::get('auth/facebook/callback', 'front\AuthController@handleProviderCallback');



    Route::get('/',[
        'uses' => 'front\urlController@acasa',
        'as' => 'acasa',


    ] );
    Route::get('/dashboard',[
        'uses' => 'front\urlController@dashboard',
        'as' => 'userDashboard',
        'middleware' => 'auth',
        'middleware' => 'user',


    ] );
    Route::get('/profile',[
        'uses' => 'front\urlController@profile',
        'as' => 'ClientProfile',
        'middleware' => 'auth',
        'middleware' => 'user',


    ] );

    Route::post('editCustomerProfile',[
        'uses' => 'front\AddCustomerProfile@addProfile',
        'as' => 'AddCustomerProfile',
        'middleware' => 'auth',
        'middleware' => 'user',



    ] );
});