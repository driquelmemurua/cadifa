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

/* Modulo Blog */
Route::get('/', 'BlogController@index');
Route::get('/entrada/{id}', 'BlogController@show');

/* Modulo Admin */
Route::get('/admin', 'AdminController@index');
Route::get('/admin/entrada', 'AdminController@create');
Route::post('/admin', 'AdminController@store');
Route::get('/admin/{id}', 'AdminController@edit');
Route::put('/admin/{id}', 'AdminController@update');
Route::delete('/admin/{id}', 'AdminController@delete');