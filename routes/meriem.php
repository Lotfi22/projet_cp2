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
//Route::post('/qrs/create','QrController@create');
Route::get('/admin/gestionnaires','gestionnaireController@index');
Route::post('/admin/gestionnaires/create','gestionnaireController@create')->name('gestionnaire.create');
Route::get('/admin/evenements','EvenementController@index');
Route::post('/admin/evenements/create','EvenementController@create')->name('evenement.create');
Route::get('/admin/gestionnaires/delete/{id}','GestionnaireController@delete');
Route::post('/admin/gestionnaires/update/{id}','GestionnaireController@update');
Route::post('/admin/gestionnaires/delete/ajax','GestionnaireController@delete');
Route::post('/admin/gestionnaires/restore/ajax','GestionnaireController@restore');
Route::get('/admin/gestionnaires/viewdeleted','GestionnaireController@viewdeleted');
Route::post('/admin/gestionnaires/check_password/ajax','GestionnaireController@check_password');

// admin controller
Route::get('/admin/index','AdminController@index_1');
Route::post('/admins/create','AdminController@create');
Route::post('/admins/update/{id}','AdminController@update');
Route::get('/admins/viewdeleted','AdminController@viewdeleted');
Route::post('/admins/delete/ajax','AdminController@delete');
Route::get('/admins/viewdeleted','AdminController@viewdeleted');
Route::post('/admins/restore/ajax','AdminController@restore');
Route::post('/admins/check_password/ajax','AdminController@check_password');



















