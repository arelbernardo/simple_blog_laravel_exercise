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

Route::get('/', ['as' => 'home_index', 'uses' => 'HomeController@index']);

Auth::routes();

Route::group(['prefix' => '/profile/{username}'], function() {
    Route::get('/', [
        'as' => 'profile_index',
        'uses' => 'ProfileController@index'
    ]);
    Route::post('/create', [
        'as' => 'profile_post_create',
        'uses' => 'ProfileController@createPost'
    ]);
});