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
Route::any('/man/index','Man\ManController@index');//我的订单
Route::any('/man/pay','Man\ManController@pay');//代付款
Route::any('/man/send','Man\ManController@send');//代发货
Route::any('/man/perinfo','Man\ManController@perinfo');//个人信息
Route::any('/man/getArea','Man\ManController@getArea');//三级联动----省市区
Route::any('/man/per_add','Man\ManController@per_add');//个人信息--添加
Route::any('/man/per_index','Man\ManController@per_index');//个人信息--展示
Route::any('/man/per_edit','Man\ManController@per_edit');//个人信息--修改
Route::any('/man/per_update','Man\ManController@per_update');//个人信息--修改

Route::any('/man/history','Man\ManController@history');//浏览历史
Route::any('/man/coupon','Man\ManController@coupon');//优惠卷
Route::any('/man/collect','Man\ManController@collect');//收藏
Route::any('/man/address','Man\ManController@address');//收货地址
Route::any('/man/evaluate','Man\ManController@evaluate');//待评价
Route::any('/man/received','Man\ManController@received');//待收获
//首页
Route::any('/index/cart','Index\IndexController@cart');//购物车
Route::any('/index/cartnumjian','Index\IndexController@cartnumjian');//减购物车商品数量
Route::any('/index/cartnumjia','Index\IndexController@cartnumjia');//加购物车商品数量
Route::any('/index/cartdestroy','Index\IndexController@cartdestroy');//购物车删除
Route::any('/index/cartdel','Index\IndexController@cartdel');//购物车删除
Route::any('/index/success_cart','Index\IndexController@success_cart');//成功加入购物车
Route::any('/index/item/{goods_id}','Index\IndexController@item');//详情


Route::any('/index/order','Index\IndexController@order');//订单
//注册登录
Route::any('/index/register','login\LoginController@register');//注册
Route::any('/index/sendtel','login\LoginController@sendtel');//发送短信验证码
Route::any('/index/do_register','login\LoginController@do_register');//执行注册
Route::any('/index/login','login\LoginController@login');//登录
Route::post('/index/do_login','login\LoginController@do_login');//执行登录


