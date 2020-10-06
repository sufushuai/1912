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
Route::group(['prefix'=>'/man', 'middleware' => ['user','userinfo']],function(){
    Route::any('/index','Man\ManController@index');//我的订单
    Route::any('/pay','Man\ManController@pay');//订单状态
    Route::any('/history','Man\ManController@history');//浏览历史
    Route::any('/coupon','Man\ManController@coupon');//优惠卷
    Route::any('/address','Man\ManController@address');//收货地址
});
//个人信息
Route::group(['prefix'=>'/man'],function(){
    Route::any('/perinfo','Man\PersonalController@perinfo');//个人信息
    Route::any('/getArea','Man\PersonalController@getArea');//三级联动----省市区
    Route::any('/per_add','Man\PersonalController@per_add');//个人信息--添加
    Route::any('/per_index','Man\PersonalController@per_index');//个人信息--展示
    Route::any('/per_edit','Man\PersonalController@per_edit');//个人信息--修改
    Route::any('/per_update','Man\PersonalController@per_update');//个人信息--修改
});
//我的收藏
Route::group(['prefix'=>'/man' ],function(){
    Route::any('/collect','Man\CollectController@collect');//我的收藏
    Route::any('/create','Man\CollectController@create');//添加收藏
    Route::any('/delete','Man\CollectController@delete');//删除收藏
});


//首页
Route::any('/index/cart','Index\IndexController@cart');//购物车
Route::any('/index/sku','Index\IndexController@sku');//详情sku
Route::any('/index/cartnumjian','Index\IndexController@cartnumjian');//减购物车商品数量
Route::any('/index/cartnumjia','Index\IndexController@cartnumjia');//加购物车商品数量
Route::any('/index/money','Index\IndexController@money');//购物车总价
Route::any('/index/cartnum','Index\IndexController@cartnum');//购物车总数量
Route::any('/index/cartadd','Index\IndexController@cartadd');//购物车添加
Route::any('/index/cartdestroy','Index\IndexController@cartdestroy');//购物车删除
Route::any('/index/cartdel','Index\IndexController@cartdel');//购物车删除
Route::any('/index/success_cart','Index\IndexController@success_cart');//成功加入购物车
Route::any('/index/item/{goods_id}','Index\IndexController@item');//详情
Route::any('/index/cartdestroy','Index\IndexController@cartdestroy');//购物车删除
Route::any('/index/cartdel','Index\IndexController@cartdel');//购物车删除
Route::any('/index/success_cart','Index\IndexController@success_cart');//成功加入购物车
Route::any('/index/order','Index\IndexController@order');//订单
Route::any('/index/area','Index\IndexController@area');//三级联动
Route::any('/index/create','Index\IndexController@create');//订单
Route::any('/index/list/{cate_id}','Index\IndexController@list');//商品列表
Route::any('/index/del','Index\IndexController@del');//地址删除
Route::any('/index/update/{id}','Index\IndexController@update');//修改
Route::any('/index/updatedo','Index\IndexController@updatedo');//修改
Route::any('/index/default/{id}','Index\IndexController@default');//默认收货地址
//注册登录
Route::any('/index/register','login\LoginController@register');//注册
Route::any('/index/sendtel','login\LoginController@sendtel');//发送短信验证码
Route::any('/index/do_register','login\LoginController@do_register');//执行注册
Route::any('/index/login','login\LoginController@login');//登录
Route::post('/index/do_login','login\LoginController@do_login');//执行登录
Route::any('/index/quit','login\LoginController@quit');//退出登录


Route::any('/conter/index/login','Conter\ConterController@login');//中间件跳转登陆页面
Route::any('/conter/index/perinfo','Conter\ConterController@perinfo');//中间件跳转个人信息页面



