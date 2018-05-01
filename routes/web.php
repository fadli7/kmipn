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

Route::get('/', 'Frontend\PagesController@index')->name('home');
Route::get('login', 'Frontend\PagesController@viewLogin');
Route::get('/register', 'Frontend\PagesController@viewRegister');
Route::get('/forgot', 'Frontend\PagesController@forgot');

//Auth::routes();

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

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/backend', 'namespace' => '\Backend', 'middleware' => ['auth', 'role:admin' ]], function() {
    Route::get('/', array('as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index'));
    Route::resource('users', 'UsersController');
    Route::resource('admin', 'AdminController');
    Route::resource('lomba', 'LombaController');

    Route::get('/pendaftaran/{id}/edit', ['as' => 'pendaftaran.edit', 'uses' => 'PendaftaranController@edit']);
    Route::resource('pendaftaran', 'PendaftaranController', [ 'only' => [
        'update','destroy'
      ]]);

    Route::get('/pendaftaran/daftar/', ['as' => 'pendaftaran.daftar', 'uses' => 'PendaftaranController@daftar']);
    Route::get('/pendaftaran/tahap_seleksi/', ['as' => 'pendaftaran.tahap_seleksi', 'uses' => 'PendaftaranController@tahap_seleksi']);
    Route::get('/pendaftaran/lolos/', ['as' => 'pendaftaran.lolos', 'uses' => 'PendaftaranController@lolos']);
    Route::get('/pendaftaran/tidak_lolos/', ['as' => 'pendaftaran.tidak_lolos', 'uses' => 'PendaftaranController@tidak_lolos']);
});
