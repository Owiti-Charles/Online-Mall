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

use Illuminate\Support\Facades\Route;


Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

Route::get('/cart/remove/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');

Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

Route::resource('orders', 'OrderController')->middleware('auth');

Route::get('paypal/checkout', 'PaypalController@getExpressCheckout');

Route::get('paypal/checkout-success', 'PaypalController@getExpressCheckoutSuccess')->name('paypal.success');

Route::get('paypal/checkout-cancel', 'PaypalController@cancelPage')->name('paypal.cancel');


