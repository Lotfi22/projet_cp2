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

Route::get('/imene','TestController@imene');

//Abonnement routes:
Route::get('/admin/abonnements','AbonnementController@index');
Route::post('/admin/abonnements/create','AbonnementController@create')->name('abonnement.create');;
Route::post('/admin/abonnements/update','AbonnementController@update');
Route::get('/admin/abonnements/delete/{id}','AbonnementController@delete');

//Categories routes:
Route::get('/admin/categories','CategorieController@index');
Route::post('/admin/categories/create','CategorieController@create')->name('categorie.create');;
Route::post('/admin/categories/update','CategorieController@update');
Route::get('/admin/categories/delete/{id}','CategorieController@delete');

//Sous_categories routes:
Route::get('/admin/sous_categories','Sous_categorieController@index');
Route::post('/admin/sous_categories/create','Sous_categorieController@create');
Route::post('/admin/sous_categories/update','Sous_categorieController@update');
Route::get('/admin/sous_categories/delete/{id}','Sous_categorieController@delete');




