<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/logout', function () {
	Auth::logout();
	return view('home');
});


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', function () {
    return view('user');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/insert_product',"product@insert_product" );
//get tem we will turn it to post
Route::get('/add_product',"product@add_product" );

Route::get('/add_product', function () {
    return view('addpo');
});
