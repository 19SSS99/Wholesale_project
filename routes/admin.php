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
Route::get('sssss', '\App\Http\Controllers\Dashboard\AuthController@login')->name('login.dashboard');
############################# Admin Route ###########################################
Route::group(['prefix'=>'cp_admins'],function (){
    Route::get('login', '\App\Http\Controllers\Dashboard\AuthController@login')->name('login.admin');
    Route::post('postuser', '\App\Http\Controllers\Dashboard\AuthController@postlogin')->name('admin.login');
});
Route::group(['prefix'=>'cp_admins','middleware'=>'auth:admin'],function () {
    Route::get('/', '\App\Http\Controllers\Dashboard\AdminDashboard@index')->name('admin_dashboard');//home of dashboard
    Route::get('logout', '\App\Http\Controllers\Dashboard\AuthController@logout')->name('admin.logout');//logout

    Route::group(['prefix' => 'profile'], function () {
        Route::get('edit', '\App\Http\Controllers\Dashboard\ProfileController@editProfile')->name('edit.profile');
        Route::put('update', '\App\Http\Controllers\Dashboard\ProfileController@updateprofile')->name('update.profile');
    });
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', '\App\Http\Controllers\Dashboard\CategoryController@index')->name('categories.index');
        Route::get('create', '\App\Http\Controllers\Dashboard\CategoryController@create')->name('categories.create');
        Route::post('store', '\App\Http\Controllers\Dashboard\CategoryController@store')->name('categories.store');
        Route::get('/edit/{id}', '\App\Http\Controllers\Dashboard\CategoryController@edit') ->name('categories.edit') ;
        Route::post('update/{id}', '\App\Http\Controllers\Dashboard\CategoryController@update')->name('categories.update');
        Route::get('/delete/{id}', '\App\Http\Controllers\Dashboard\CategoryController@destroy') ->name('categories.delete') ;

    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', '\App\Http\Controllers\Dashboard\UserController@index')->name('users.index');
        Route::get('/delete/{id}', '\App\Http\Controllers\Dashboard\UserController@destroy') ->name('users.delete') ;

    });
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', '\App\Http\Controllers\Dashboard\ContactController@index')->name('dashboard.contacts.index');
        Route::get('/show/{id}', '\App\Http\Controllers\Dashboard\ContactController@show') ->name('dashboard.contacts.show') ;

        Route::get('/delete/{id}', '\App\Http\Controllers\Dashboard\ContactController@destroy') ->name('dashboard.contacts.delete') ;

    });
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', '\App\Http\Controllers\Dashboard\OrderController@index')->name('dashboard.orders.index');
        Route::get('/show/{id}', '\App\Http\Controllers\Dashboard\OrderController@show') ->name('dashboard.orders.show') ;

        Route::get('/delete/{id}', '\App\Http\Controllers\Dashboard\OrderController@destroy') ->name('dashboard.orders.delete') ;

    });
});


