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

//General Routes
Route::get('/', 'UsersController@home');
Route::get('/amazon', 'UsersController@amazon');
Route::get('/itunes', 'UsersController@itunes');
Route::get('/about', 'UsersController@about');
Route::get('/contact', 'UsersController@contact');
Route::get('/terms', 'UsersController@terms');
Route::get('/privacy', 'UsersController@privacy');
Route::get('/cart', 'UsersController@cart');
Route::get('/add_to_cart/{id}/{name}/{quantity}/{image}/{price}', 'UsersController@addToCart');
Route::get('/delete_item_cart/{rowId}', 'UsersController@deleteFromCart');
Route::get('/checkout', 'UsersController@checkout');

Route::post('/update_cart', 'UsersController@updateCart');
Route::post('/order', 'UsersController@orderPost');

// Route::get('login', function () {
//     return view('login');
// });
Route::get('/login', 'LoginsController@login');
Route::get('/register', 'LoginsController@register');
Route::get('/logout', 'LoginsController@logout');
Route::post('/auth', 'LoginsController@auth');
Route::post('/register_post', 'LoginsController@registerPost');




?>