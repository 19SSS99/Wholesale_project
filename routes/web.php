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


Route::group([],function (){
    Route::get('register', '\App\Http\Controllers\Front\AuthController@create_register')->name('front.create_register');
    Route::post('store_register', '\App\Http\Controllers\Front\AuthController@store_register')->name('front.store_register');
    Route::get('/terms_and_conditions', '\App\Http\Controllers\Front\PagesController@terms')->name('terms_and_conditions');
    Route::get('/login', '\App\Http\Controllers\Front\AuthController@login')->name('login');
    Route::post('postuser', '\App\Http\Controllers\Front\AuthController@postlogin')->name('login.post');

});

Route::get('/', '\App\Http\Controllers\Front\HomeController@index')->name('index');
Route::get('/show/products/{id}', '\App\Http\Controllers\Front\ProductController@index')->name('products.show');
Route::get('/product/details/{id}', '\App\Http\Controllers\Front\ProductController@details')->name('products.details');
Route::get('/contact_us', '\App\Http\Controllers\Front\Contact_UsController@index')->name('contact_us');
Route::post('/contact_us/store', '\App\Http\Controllers\Front\Contact_UsController@store_contact')->name('contact_us.store');
Route::get('/about', '\App\Http\Controllers\Front\Contact_UsController@about')->name('about');

Route::group([ 'middleware' => 'auth'], function () {
    // must be authenticated user
    //home of dashboard
    Route::get('/home', '\App\Http\Controllers\Front\HomeController@index')->name('home');
    Route::get('seller/dashboard', '\App\Http\Controllers\Seller\DashboardController@index')->name('seller_dashboard');
    Route::get('logout', '\App\Http\Controllers\Front\AuthController@logout')->name('logout');
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', '\App\Http\Controllers\Seller\ProductController@index')->name('products.index');
        Route::get('create', '\App\Http\Controllers\Seller\ProductController@create')->name('products.create');
        Route::post('store', '\App\Http\Controllers\Seller\ProductController@store')->name('products.store');
        Route::get('/edit/{id}', '\App\Http\Controllers\Seller\ProductController@edit') ->name('products.edit') ;
        Route::post('update/{id}', '\App\Http\Controllers\Seller\ProductController@update')->name('products.update');
        Route::get('/delete/{id}', '\App\Http\Controllers\Seller\ProductController@destroy') ->name('products.delete') ;

    });
    Route::group(['prefix' => 'seller_orders'], function () {
        Route::get('/', '\App\Http\Controllers\Seller\OrderController@index')->name('seller.orders.index');
        Route::get('/show/{id}', '\App\Http\Controllers\Seller\OrderController@show') ->name('seller.orders.show') ;


    });
    Route::group(['prefix' => 'Cart'], function () {
        Route::get('/', '\App\Http\Controllers\Buyer\CartController@index')->name('front.cart');
        Route::post('/add_cart', '\App\Http\Controllers\Buyer\CartController@add_cart')->name('add_cart');
        Route::get('/delete/{id}', '\App\Http\Controllers\Buyer\CartController@destroy')->name('cart.delete');
        Route::get('/destroy/all', '\App\Http\Controllers\Buyer\CartController@delete_all')->name('delete.all.cart');

    });
    Route::group(['prefix' => 'Order'], function () {
        Route::get('/', '\App\Http\Controllers\Buyer\OrderController@index')->name('order.index');
        Route::post('/store', '\App\Http\Controllers\Buyer\OrderController@store')->name('order.store');
//        Route::get('/delete/{id}', '\App\Http\Controllers\Buyer\OrderController@destroy')->name('cart.delete');
//        Route::get('/destroy/all', '\App\Http\Controllers\Buyer\OrderController@delete_all')->name('delete.all.cart');

    });
});
