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
    //购物车
    public function cart(){
        return view('index.cart');
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
