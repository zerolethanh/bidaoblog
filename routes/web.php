<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
    return view('homepage.index');
});


Route::get('config', function () {
//    return config()->all();
    return app()->version();
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'homepage'], function () {
    Route::get('{view?}', 'HomePageController@view');
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('write', 'BlogController@write');
    Route::post('save', 'BlogController@save');
    Route::get('all', 'BlogController@all');
});