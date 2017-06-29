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

Route::get('', function(){ return redirect()->route('stories');});
Route::get('stories', 'StoriesController@index')->name('stories');
Route::get('designs', 'DesignsController@index')->name('designs');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('comment', 'CommentController@index')->name('newComment');
Route::get('entry', 'EntryController@index')->name('entry');
Route::get('entry/story', 'EntryController@story')->name('story');
Route::get('entry/design', 'EntryController@design')->name('design');
Route::post('entry/story', 'EntryController@newStory')->name('newStory');

Route::get('login', function(){return redirect()->route('auth');})->name('login');
Route::group(['namespace' => 'Auth'], function () {
Route::get('auth', 'AuthController@redirectToProvider')->name('auth');
Route::get('auth/callback', 'AuthController@handleProviderCallback');
Route::post('logout', 'AuthController@logout')->name('logout');
});