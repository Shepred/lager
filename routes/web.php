<?php

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

Route::get('/', 'HomeController@index');

Route::get('/position/create', 'PosController@create');
Route::post('/position/create', 'PosController@store');

Route::get('/position/edit', 'PosController@edit');
Route::post('/position/update', 'PosController@update');


Route::post('/sku/search', 'SKUController@show');
Route::post('/position/search', 'PosController@show');

Route::get('/overstock', 'OverstockController@index');
Route::post('/overstock/search', 'OverstockController@show');

Route::get('/import', 'CsvImportController@index');