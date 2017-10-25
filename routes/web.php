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

Route::get('/', 'TodoController@index');
Route::get('/ftambah', 'TodoController@ftambah_data');
Route::post('/add', 'TodoController@add');
Route::get('/fedit/{id}', 'TodoController@fedit_data');
Route::post('/update/{id}', 'TodoController@update');
