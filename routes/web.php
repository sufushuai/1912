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
Route::any('/index','Index\IndexController@index');

Route::any('/man/perinfo','Man\ManController@perinfo');//个人信息
Route::any('/man/history','Man\ManController@history');//浏览历史
Route::any('/man/coupon','Man\ManController@coupon');//优惠卷

Route::any('/index/login','Index\IndexController@login');
Route::any('/index/register','Index\IndexController@register');
Route::any('/index/cart','Index\IndexController@cart');

