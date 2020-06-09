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
Route::get('/user',"product@show_products" );
Route::get('/admin',"product@show_products_admin" );

//Route::get('/delete-records','product@index');

//Route::get('edit-records','product@index');
Route::get('edit/{id}','product@show');
Route::post('edit/{id}','product@edit');



Route::get('delete/{id}','product@destroy');

Route::get('/logout', function () {
	Auth::logout();
	return view('home');
});


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/about', function () {
    return view('about');
});

Route::get('/insert_product',"product@insert_product" );
//get tem we will turn it to post
Route::get('/add_product',"product@add_product" );

Route::get('/add_product', function () {
    return view('addpo');
});

Route::get('showproductdetails/{id}','product@showproductdetails');

Route::get('add-to-cart/{id}', 'product@addToCart');

Route::get('cart', 'product@cart');

Route::delete('remove-from-cart', 'product@remove');


Route::patch('update-cart', 'product@update');

Route::get('/search',"product@search" );

Route::get('/search_admin',"product@search_admin" );