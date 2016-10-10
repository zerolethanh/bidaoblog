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
    return redirect('blogs');
});


//Route::get('config', function () {
//    return config()->all();
//    return app()->version();
//});
Auth::routes();

//Route::get('/home', 'HomeController@index');
//Route::group(['prefix' => 'homepage'], function () {
//    Route::get('{view?}', 'HomePageController@view');
//});

Route::get('blogs', 'BlogController@all');
Route::group(['prefix' => 'blog'], function () {
    Route::get('write', 'BlogController@write');
    Route::post('save', 'BlogController@save');
    Route::get('all', 'BlogController@all');
    Route::get('{Y?}/{m?}/{d?}/{title?}', 'BlogController@show');
});

Route::get('password-gen','PasswordGen@index');

Route::group(['prefix' => 'vn'], function () {
    Route::get('/', 'VnController@index');

});
Route::group(['prefix' => 'jp'], function () {
    Route::get('/', 'JpController@index');

});