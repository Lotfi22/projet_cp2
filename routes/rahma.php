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


Route::get('/rahma','TestController@rahma');
//Admin
/*Route::get('/admins','AdminController@index');
Route::post('/admins/create','AdminController@create');
//Facture
Route::get('/factures','FactureController@index');
Route::post('/factures/create','FactureController@create');
//Salle
Route::get('/salles','SalleController@index');
Route::post('/salles/create','SalleController@create');*/


Route::get('/admin/gestionnaires','GestionnaireController@index');


Route::get('/admin/factures','FactureController@index');
Route::post('/admin/factures/create','FactureController@create')->name('facture.create');
Route::post('/admin/factures/update','FactureController@update');
Route::get('/admin/factures/delete/{id}','FactureController@delete1');
Route::get('/admin/factures/restore/{id}','FactureController@restore1');
Route::get('/admin/factures/viewdeleted','FactureController@viewdeleted');
Route::post('/admin/factures/delete/ajax','FactureController@delete');
Route::post('/admin/factures/restore/ajax','FactureController@restore');

Route::get('/admin/salles','SalleController@index');
Route::post('/admin/salles/create','SalleController@create')->name('salle.create');
Route::post('/admin/salles/update','SalleController@update');
Route::get('/admin/salles/delete/{id}','SalleController@delete1');
Route::get('/admin/salles/restore/{id}','SalleController@restore1');
Route::get('/admin/salles/viewdeleted','SalleController@viewdeleted');

Route::post('/admin/salles/delete/ajax','SalleController@delete');
Route::post('/admin/salles/restore/ajax','SalleController@restore');


