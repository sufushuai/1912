<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BrandModel;

class IndexController extends Controller
{
    //首页
    public function index(){
        $brand=BrandModel::limit(10);
        return view('index.index',['brand'=>$brand]);
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
