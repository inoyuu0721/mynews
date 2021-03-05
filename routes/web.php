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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); 
});

///Laravel 09 課題３///
Route::get('XXX','AAAController@bbb');
///////////

///Laravel 09 & Laravel 12 課題２、３///
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    
    //Laravel 13 課題３
    Route::post('profile/create', 'Admin\ProfileController@create'); 
    
    //Laravel 13 課題６
    Route::post('profile/edit', 'Admin\ProfileController@update'); 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
