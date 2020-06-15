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
    return view('auth.login');
});

Auth::routes();

//Route::resource('auth','HomeCOntroller');
//Route::get('/login','HomeController@login');
//Route::get('/login_doc','HomeController@login_doc');

Route::get('/doktor_view', 'DoktorController@index')->name('doktor')->middleware('doktor');
Route::get('/admin_view', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/staff_view', 'StaffController@index')->name('staff')->middleware('staff');
Route::get('/customer_view', 'CustomerController@index')->name('customer')->middleware('customer');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rawat_pesakit','RawatController@rawat_pesakit');
Route::get('/viewdoktor','BentukperubatanController@viewdoktor');

Route::resource('layouts','HomeController');
Route::resource('pesakits','PesakitController');
Route::resource('pekerjas', 'PekerjaController');
Route::resource('ubats','UbatController');
Route::resource('stocks','StockController');
Route::resource('rawat','RawatController');
Route::resource('doktors', 'ViewdoktorController');
Route::resource('staff', 'ResitController');
Route::resource('resit', 'StaffController');
Route::resource('pengguna', 'PenggunaController');

Route::get('/kewangan','LaporanController@kewangan');
Route::get('/perubatan','LaporanController@perubatan');
Route::get('/penyakit','LaporanController@penyakit');
Route::get('/admin_view','DashboardController@admin_view');
Route::get('/doktor_view','DashboardController@doktor_view');
Route::resource('temujanji','TemujanjiController');
Route::get('/temujanji_admin','TemujanjiController@temujanji_admin');
Route::get('/status/{status}','PesakitController@changeStatus');
Route::get('/delete/{user}', 'TemujanjiController@destroy');
