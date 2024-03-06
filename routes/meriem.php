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

Route::get('/meriem','TestController@meriem');
Route::get('/evenements','EvenementController@index');
Route::post('/evenements/create','EvenementController@create');
Route::get('/gestionnaires','GestionnaireController@index');
Route::post('/gestionnaires/create','GestionnaireController@create');
Route::get('/qrs','QrController@index');
Route::post('/qrs/create','QrController@create');



