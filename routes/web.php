<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'LandingPageController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index');

Route::get('/cart', 'CartController@index');

Route::get('/shop/detail/{id}', 'ShopController@show');

Route::get('/shop/category/{id}', 'ShopController@category');

Route::post('/store', 'CartController@store');

Route::patch('/cart/{id}', 'CartController@update');

Route::delete('/delete/{id}', 'CartController@delete');

Route::post('/checkout', 'CheckoutController@store');