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
Route::post('/admin/adherants/delete/ajax','AdherantsController@delete');
Route::post('/admin/adherants/restore/ajax','AdherantsController@restore');
Route::get('/admin/adherants/{id_adherant}','AdherantsController@profile');
Route::get('/admin/adherants/restore/{id}','AdherantsController@restore');
Route::get('/adherants/viewdeleted','AdherantsController@viewdeleted');







//Coachs routes :
Route::get('/admin/coaches','CoachController@index');
Route::post('/admin/coaches/create','CoachController@create')->name('coaches.create');;
Route::post('/admin/coaches/update','CoachController@update');
Route::get('/admin/coaches/delete/{id}','CoachController@delete');
Route::post('/admin/coaches/delete/ajax','CoachController@delete');
Route::post('/admin/coaches/restore/ajax','CoachController@restore');
Route::get('/admin/coaches/{id}','CoachController@profile');
Route::get('/admin/coaches/restore/{id}','CoachController@restore');
Route::get('/coaches/viewdeleted','CoachController@viewdeleted');


