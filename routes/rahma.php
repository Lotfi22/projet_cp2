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

Route::get('/rahma','TestController@rahma');
//Admin
/*Route::get('/admins','AdminController@index');*/
Route::post('/admins/create','AdminController@create');
//Facture
Route::get('/factures','FactureController@index');
Route::post('/factures/create','FactureController@create');
//Salle
Route::get('/salles','SalleController@index');
Route::post('/salles/create','SalleController@create');