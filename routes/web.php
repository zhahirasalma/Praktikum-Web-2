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

Route::get('/register', 'LoginController@index');
Route::get('/home', 'HomeController@index');
Route::get('/pertama', 'HomeController@index2');
Route::get('/kedua', 'HomeController@index3');
Route::get('/ketiga', 'HomeController@index4');

Route::resource('/kategori', 'CategoryController');


Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/charts', 'DashboardController@charts')->name('charts');
Route::get('/tabel', 'DashboardController@tabel')->name('tabel');
//Route::get('/kategori', 'DashboardController@kategori')->name('kategori');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
