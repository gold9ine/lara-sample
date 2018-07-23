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

// base
Auth::routes();

Route::get('/', function () {
    // return view('welcome');
	return view('home');
});

Route::get('home', function () {
	return view('home');
});

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('info', function () {
	return view('info');
});

Route::resource('articles', 'ArticlesController');

// Route::resource('products', 'ProductsController');

// DB::listen(function ($query){
// 	// var_dump($query->sql);
// 	dump($query->sql);
// });