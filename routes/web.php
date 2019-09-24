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

Route::get('/','ProductController@getHomePageProducts')->name('home');

Route::get('shop','ProductController@getProducts')->name('shop');

Route::get('cart','ProductController@getCart')->name('cart');

Route::get('product/{id}','ProductController@getSingleProduct')->name('product');

Route::get('product/category/{id}','ProductController@getProductsByCategory')->name('category.products');

Route::get('product/addToCart/{id}','ProductController@addToCart')->name('product.addToCart');

Route::get('product/removeFromCart/{id}','ProductController@removeFromCart')->name('product.removeFromCart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');

    Route::get('register', 'AdminController@create')->name('admin.register');

    Route::post('register', 'AdminController@store')->name('admin.register.store');

    Route::get('login', 'AdminLoginController@login')->name('admin.auth.login');

    Route::post('login', 'AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');

    Route::post('logout', 'AdminLoginController@logout')->name('admin.auth.logout');

});
Auth::routes();
