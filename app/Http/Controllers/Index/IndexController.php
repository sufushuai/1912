<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;

class IndexController extends Controller
{
    //首页
    public function index(){

        $slide=SlideModel::where('is_del',1)->limit(5)->get();
        $ad=AdModel::where('is_del',1)->limit(5)->get();
        $brand=BrandModel::where('status',1)->limit(10)->get();
        return view('index.index',['brand'=>$brand,'ad'=>$ad,'slide'=>$slide]);
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
