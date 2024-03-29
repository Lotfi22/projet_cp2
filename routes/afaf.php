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

Route::get('/afaf','TestController@afaf');
//Groupe
Route::get('/admin/groupes','groupeController@index');
Route::post('/admin/groupes/create','GroupeController@create');
Route::get('/admin/groupes/delete/{id}','GroupeController@delete');
Route::post('/admin/groupes/update','GroupeController@update');
Route::get('/admin/groupes/viewdeleted','GroupeController@viewdeleted');
Route::get('/admin/groupes/restore/{id}','GroupeController@restore');
Route::get('admin/send', function () {
Illuminate\Support\Facades\Mail::send(new  \App\Mail\mailfile);
return view('email.index');
});

Route::get('/groupes/{id}', 'GroupeController@show')->name('show_name');

//Sport
Route::get('/admin/sports','SportsController@index');
Route::post('admin/sports/create','SportsController@create');
Route::get('/admin/sports/delete/{id}','SportsController@delete');
Route::post('/admin/sports/update','SportsController@update');