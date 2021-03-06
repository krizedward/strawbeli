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

Route::get('/cultivation', function () {
    return view('cultivation.index');
});

Route::get('/forum', function () {
    return view('forum.index');
});

Route::get('/destination','DestinationController@index');

Route::get('/Gallery','GalleryController@index');

Route::get('/Shop','ShopController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
