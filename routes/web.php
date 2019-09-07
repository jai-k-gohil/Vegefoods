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

Route::get('/', [
    'uses' => 'ProductController@getHomePageProducts',
    'as' => 'home'
]);

Route::get('/shop', [
    'uses' => 'ProductController@getProducts',
    'as' => 'shop'
]);

Route::get('/cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'cart'
]);

Route::get('product/{id}', [
    'uses' => 'ProductController@getSingleProduct',
    'as' => 'product'
]);

Route::get('/product/addToCart/{id}', [
    'uses' => 'ProductController@addToCart',
    'as' => 'product.addToCart'
]);

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');