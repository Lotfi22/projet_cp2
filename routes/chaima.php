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

//seances
Route::get('/seances', 'SeancesController@index');
Route::post('/seances/create', 'SeancesController@create');

//Adherants routes :
Route::get('/admin/adherants','AdherantsController@index');
Route::post('/admin/adherants/create','AdherantsController@create')->name('adherants.create');;
Route::post('/admin/adherants/update','AdherantsController@update');
Route::get('/admin/adherants/delete/{id}','AdherantsController@delete');

//Coachs routes :
Route::get('/admin/coachs','CoachController@index');
Route::post('/admin/coachs/create','CoachController@create')->name('coachs.create');;
Route::post('/admin/coachs/update','CoachController@update');
Route::get('/admin/coachs/delete/{id}','CoachController@delete');
