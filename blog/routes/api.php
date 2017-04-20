<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Entradas */
Route::get('/api/entradas', 'EntradasController@index');
Route::get('/api/entradas/{id}', 'EntradasController@show');
Route::post('/api/entradas', 'EntradasController@store');
Route::put('/api/entradas/{id}/{titulo?}', 'EntradasController@update');
Route::delete('/api/entradas/{id}', 'EntradasController@delete');

/* Comentarios */
Route::get('/api/entradas/comentarios', 'ComentariosController@index');
Route::get('/api/entradas/{id}/comentarios', 'ComentariosController@show');