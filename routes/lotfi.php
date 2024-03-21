<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;



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


// Auth routes
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.home');
Route::get('/password',function(){ dd(Hash::make('ADMIN')); }); 
//should be deleted later

//Categories routes :
Route::get('/admin/categories','CategorieController@index');
Route::post('/admin/categories/create','CategorieController@create')->name('categorie.create');;
Route::post('/admin/categories/update','CategorieController@update');
Route::get('/admin/categories/delete/{id}','CategorieController@delete');

Route::post('/admin/categories/delete/ajax','CategorieController@delete');

Route::get('/admin/categories/{id}/sous_categorie','Sous_categorieController@home');





