<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');
Auth::routes();

//********************************GET********************************
//LoginController
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin_login');
Route::get('/login/client', 'Auth\LoginController@showClientLoginForm')->name('client_login');

//RegisterController
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('admin_register');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm')->name('client_register');

//ClientController
Route::get('/client', 'ClientController@clientDashboard')->name('client_dashboard');

//AdminController
Route::get('/admin', 'AdminController@adminDashboard')->name('admin_dashboard');

//HomeController
Route::get('/home', 'HomeController@index')->name('home');

//********************************POST********************************
//LoginController
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin_login');
Route::post('/login/client', 'Auth\LoginController@clientLogin')->name('client_login');

//RegisterController
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin_register');
Route::post('/register/client', 'Auth\RegisterController@createClient')->name('client_register');

