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

Route::get('/', ['as' => 'home', 'uses' => 'Frontend\PagesController@index'])->name('home');
Route::get('/login', ['as' => 'login', 'uses' => 'Frontend\PagesController@viewLogin']);
Route::get('/register', ['as' => 'view.register', 'uses' => 'Frontend\PagesController@viewRegister']);
Route::get('/forgot', 'Frontend\PagesController@forgot');
Route::get('/faq', ['as' => 'view.faq', 'uses' => 'Frontend\PagesController@viewFaq']);
Route::get('/jadwal-pelaksanaan', ['as' => 'view.jadwal', 'uses' => 'Frontend\PagesController@viewJadwal']);
//Auth::routes();

Route::prefix('ecodeeepis')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('ecodeeepis.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('ecodeeepis.login.submit');
    Route::get('/', 'AdminController@admin')->name('ecodeeepis.dashboard');
    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AdminLoginController@logout']);

    //Route::get('/', array('as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index'));
    Route::resource('users', 'Backend\UsersController');
    Route::resource('admin', 'Backend\AdminController');
    Route::resource('lomba', 'Backend\LombaController');
    Route::resource('artikel', 'Backend\ArtikelController');
    Route::resource('galeri', 'Backend\GaleriController');

    Route::get('/pendaftaran/{id}/edit', ['as' => 'pendaftaran.edit', 'uses' => 'Backend\PendaftaranController@edit']);
    Route::resource('pendaftaran', 'Backend\PendaftaranController', [ 'only' => [
        'update','destroy'
      ]]);

    Route::get('/pendaftaran/daftar/', ['as' => 'pendaftaran.daftar', 'uses' => 'Backend\PendaftaranController@daftar']);
    Route::get('/pendaftaran/tahap_seleksi/', ['as' => 'pendaftaran.tahap_seleksi', 'uses' => 'Backend\PendaftaranController@tahap_seleksi']);
    Route::get('/pendaftaran/lolos/', ['as' => 'pendaftaran.lolos', 'uses' => 'Backend\PendaftaranController@lolos']);
    Route::get('/pendaftaran/tidak_lolos/', ['as' => 'pendaftaran.tidak_lolos', 'uses' => 'Backend\PendaftaranController@tidak_lolos']);
});

// Login Routes...
Route::post('/auth/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::post('/auth/register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

//Forgot Reset Password
Route::post('/auth/forgot', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('/password/reset/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

//Backend Routes

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile/dashboard', ['as' => 'view.profile', 'uses' => 'Frontend\PagesController@viewProfile']);
    Route::get('/profile/tambah-anggota', ['as' => 'view.addanggota', 'uses' => 'Frontend\PagesController@viewAddAnggota']);
    Route::get('/profile/info-tim', ['as' => 'view.info', 'uses' => 'Frontend\PagesController@viewInfoTim']);
    Route::get('/profile/edit_anggota/{id}', ['as' => 'view.edit_anggota', 'uses' => 'Frontend\PagesController@edit_anggota']);
    Route::post('/profile/submit_edit_anggota/{id}', ['as' => 'view.submit_edit_anggota', 'uses' => 'Frontend\PagesController@submit_edit_anggota']);
    Route::post('/profile/submit_add_anggota/', ['as' => 'view.submit_add_anggota', 'uses' => 'Frontend\PagesController@submit_add_anggota']);
    Route::get('/profile/submit_delete_anggota/{id}', ['as' => 'view.submit_delete_anggota', 'uses' => 'Frontend\PagesController@submit_delete_anggota']);
});
