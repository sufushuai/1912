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

Route::get('/', function () {
    return view('welcome');
});
//前台首页
Route::any('/index','Index\IndexController@index');
<<<<<<< HEAD
//订单支付
Route::any('/order_info','Order\OrderController@order_info');
Route::any('/order_info/order_success','Order\OrderController@order_success');//支付成功
Route::any('/order_info/order_error','Order\OrderController@order_error');//支付失败
=======
Route::any('/index/login','Index\IndexController@login');
Route::any('/index/register','Index\IndexController@register');
Route::any('/index/cart','Index\IndexController@cart');

>>>>>>> edc9d6baac2fe3fd1a11e210c710c0c6e5619aaf
