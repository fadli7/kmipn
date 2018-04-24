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

// Login Routes...
Route::get('/auth/login', ['as' => 'login.get', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/auth/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::post('/auth/register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

//Forgot Reset Password
Route::post('/auth/forgot', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('/password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

//Backend Routes

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => '/', 'namespace' => '\Backend', 'middleware' => ['auth', 'role:admin' ]], function() {
    Route::get('/', array('as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index'));

});