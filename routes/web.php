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
    return view('kategori.index');
});

Route::get('/register', 'LoginController@index');
Route::get('/home', 'HomeController@index');

Route::get('/pertama', 'HomeController@index2');

Route::get('/kedua', 'HomeController@index3');
Route::get('/ketiga', 'HomeController@index4');


Route::get('/kategori', 'CategoryController@index');