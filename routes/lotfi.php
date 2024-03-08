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

Route::get('/lotfi','TestController@lotfi');

Route::get('/sports','TestController@index');

Route::post('/sports/create','TestController@create');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin', 'AdminController@index')->name('admin.home');

Route::get('/password',function(){ dd(Hash::make('ADMIN')); });

Route::get('/flush',function(){ Session::flush(); });



