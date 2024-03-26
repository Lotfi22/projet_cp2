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

Route::get('/selma','TestController@selma');

Route::get('/participations','ParticipationController@index');
Route::post('/participations/create','ParticipationController@create');

Route::get('/presences','PresenceController@index');
Route::post('/presences/create','PresenceController@create');

Route::get('/admin/evenements','EvenementController@index');
Route::post('/admin/evenements/create','EvenementController@create')->name('evenement.create');;
Route::post('/admin/evenements/update','EvenementController@update');
Route::get('/admin/evenements/delete/{id}','EvenementController@delete');
Route::get('/admin/evenements/restore/{id}','EvenementController@restore');
Route::get('/admin/evenements/viewdeleted','EvenementController@viewdeleted');


Route::get('/admin/seances','SeanceController@index');
Route::post('/admin/seances/create','SeanceController@create')->name('seance.create');;
Route::post('/admin/seances/update','SeanceController@update');
Route::get('/admin/seances/delete/{id}','SeanceController@delete');
Route::get('/admin/seances/restore/{id}','SeanceController@restore');
Route::get('/admin/seances/viewdeleted','SeanceController@viewdeleted');




