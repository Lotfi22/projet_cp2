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
//Coach
Route::get('/coachs','CoachController@index');
Route::post('/coachs/create','CoachController@create');
//Groupe
Route::get('/groupes','GroupeController@index');
Route::post('/groupes/create','GroupeController@create');
//Sport
Route::get('/sports','SportsController@index');
Route::post('/sports/create','SportsController@create');

Route::get('/admin/groupes','groupeController@index');
Route::post('/admin/groupes/create','GroupeController@create');