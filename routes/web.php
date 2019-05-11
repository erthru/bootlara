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

// view
Route::get('/', 'PersonController@index');
Route::get('/create','PersonController@create');
Route::get('/update/{id}','PersonController@update');

// action
Route::post('/store','PersonController@store');
Route::get('/delete/{id}','PersonController@delete');
Route::post('/put/{id}','PersonController@put');
Route::get('/search','PersonController@search');
