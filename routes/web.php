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

Route::get('blogs/{id?}', 'BlogController@all');

Route::group(['prefix' => 'blog'], function () {
    Route::get('write', 'BlogController@write');
    Route::post('save', 'BlogController@save');
    Route::get('all', 'BlogController@all');
    Route::get('edit/{id}', 'BlogController@edit');
    Route::post('edit/{id}', 'BlogController@edit_save');
    Route::get('{id}', 'BlogController@showId');
    Route::get('{Y?}/{m?}/{d?}/{title?}', 'BlogController@show');
});

Route::get('password-gen', 'PasswordGen@index');

Route::get('upload', 'UploadController@index');
Route::post('upload', 'UploadController@save');

Route::get('tesseract','TesseractController@showUploadImageForm');
Route::group(['prefix' => 'tesseract'], function () {
    Route::get('form', 'TesseractController@showUploadImageForm');
    Route::post('save', 'TesseractController@saveImage');
});

Route::group(['prefix' => 'vn'], function () {
    Route::get('/', 'VnController@index');

});
Route::group(['prefix' => 'jp'], function () {
    Route::get('/', 'JpController@index');
});