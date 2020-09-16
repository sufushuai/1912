<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //首页
    public function index(){
        return view('index.index');
    }
    //登录
    public function login(){
        return view('index.login');
    }
    //注册
    public function register(){
        return view('index.register');
    }
    //购物车
    public function cart(){
        return view('index.cart');
    }
    //成功加入购物车
    public function success_cart(){
        return view('index.success_cart');
    }
    //详情
    public function item(){
        return view('index.item');
    }
    //订单
    public function order(){
        return view('index.order');
    }
}
