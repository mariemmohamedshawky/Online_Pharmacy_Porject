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

Route::get('/admin',"admin_product@show_products_admin" );

Route::get('/insert_product',"admin_product@insert_product" );
//get tem we will turn it to post
Route::get('/add_product',"admin_product@add_product" );

Route::get('/add_product', function () {
    return view('addpo');
});

Route::get('delete/{id}','admin_product@destroy');
Route::get('edit/{id}','admin_product@show');
Route::post('edit/{id}','admin_product@edit');
Route::get('showproductdetailsadmin/{id}','admin_product@showproductdetailsadmin');
Route::get('/search_admin',"admin_product@search_admin" );
Route::get('/view_users',"admin_product@view_user" );
Route::get('/order',"admin_product@view_order" );




Route::get('/user',"product@show_products" );
Route::get('/logout', function () {
	       $cart=session()->get('cart');

session()->flash('cart', $cart);
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


Route::get('showproductdetails/{id}','product@showproductdetails');
Route::get('showproductdetails/add-to-cart/{id}','product@addToCart');


Route::get('add-to-cart/{id}', 'product@addToCart');
Route::get('cart', 'product@cart');
Route::delete('remove-from-cart', 'product@remove');
Route::patch('update-cart', 'product@update');

Route::get('/search',"product@search" );



Route::get('/confirm', function () {
    return view('confirm');
});
Route::get('/make_order', 'product@make_order');



Route::get('/bill', function () {
    return view('bill');
});

Route::get('/back', function () {
    return redirect('/user');
});