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

Route::get('/chaima','TestController@chaima');
//adherants
Route::get('/adherants', 'AdherantsController@index');
Route::post('/adherants/create', 'AdherantsController@create');
//seances
Route::get('/seances', 'SeancesController@index');
Route::post('/seances/create', 'SeancesController@create');