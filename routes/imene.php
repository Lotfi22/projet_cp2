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

Route::get('/abonnements','AbonnementController@index');

Route::post('/abonnements/create','AbonnementController@create');

Route::get('/categories','CategorieController@index');

Route::post('/categories/create','CategorieController@create');

Route::get('/sous_categories','Sous_categorieController@index');

Route::post('/sous_categories/create','Sous_categorieController@create');

