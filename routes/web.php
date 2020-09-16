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
//订单支付
Route::any('/order_info','Order\OrderController@order_info');
Route::any('/order_info/order_success','Order\OrderController@order_success');//支付成功
Route::any('/order_info/order_error','Order\OrderController@order_error');//支付失败
//个人中心
Route::any('/man/index','Man\ManController@index');//个人信息
Route::any('/man/perinfo','Man\ManController@perinfo');//个人信息
Route::any('/man/history','Man\ManController@history');//浏览历史
Route::any('/man/coupon','Man\ManController@coupon');//优惠卷
Route::any('/man/collect','Man\ManController@collect');//收藏
Route::any('/man/address','Man\ManController@address');//收货地址
Route::any('/man/evaluate','Man\ManController@evaluate');//待评价
Route::any('/man/received','Man\ManController@received');//待收获

//首页
Route::any('/index/login','Index\IndexController@login');//登录
Route::any('/index/register','Index\IndexController@register');//注册
Route::any('/index/cart','Index\IndexController@cart');//购物车
Route::any('/index/item','Index\IndexController@item');//详情
Route::any('/index/order','Index\IndexController@order');//订单


