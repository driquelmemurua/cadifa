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

Route::group(['namespace' => 'Auth'], function () {
Route::get('auth', 'AuthController@redirectToProvider')->name('auth');
Route::get('auth/callback', 'AuthController@handleProviderCallback');
Route::post('logout', 'AuthController@logout')->name('logout');
});
/*
Route::group(['namespace' => 'Visitor'], function () {
Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['namespace' => 'Blogger', 'prefix' => 'blogger'], function () {
Route::get('/home', 'HomeController@index')->name('bloggerhome');
});*/