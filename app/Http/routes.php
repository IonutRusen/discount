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
    Route::get('/admin/profile', [
        'uses' => 'admin\LinkController@getProfile',
        'as' => 'dashboard',
        'middleware' => 'auth'
    ]);
    Route::post('admin/editProfile', [
        'uses' => 'admin\ProcessFormController@editProfile',
        'as' => 'editProfile',
        'middleware' => 'auth'
    ]);
    Route::put('admin/addLogo', [
        'uses' => 'admin\ProcessFormController@logo',
        'as' => 'addLogo',
        'middleware' => 'auth'
    ]);

    Route::get('/admin/dashboard', [
        'uses' => 'admin\UserController@getDashboard',
        'as' => 'dashboard',
        'middleware' => 'auth'
    ]);

    Route::get('admin/subscriptions', [
        'uses' => 'admin\LinkController@getSubscription',
        'as' => 'subscriptions',
        'middleware' => 'auth'
    ]);
    Route::get('admin/addnew', [
        'uses' => 'admin\LinkController@addNew',
        'as' => 'addnew',
        'middleware' => 'auth'
    ]);

});
