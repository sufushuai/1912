<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;
use App\Model\GoodsModel;

class IndexController extends Common
{
    //首页
    public function index(){

        $slide=SlideModel::where('is_del',1)->limit(5)->get();
        $ad=AdModel::where('is_del',1)->limit(5)->get();
        $brand=BrandModel::where('status',1)->limit(10)->get();
        $where=[
            'is_hot'=>1,
            'is_show'=>1,
            'is_new'=>1
        ];
        $guess=GoodsModel::where($where)->limit(12)->get()->toArray();
        //$guess=collect($guess)->toArray();
        $guess=array_chunk($guess,2,true);
        //dump($guess);die;
        return view('index.index',['brand'=>$brand,'ad'=>$ad,'slide'=>$slide,'guess'=>$guess]);
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
    //无限极
    public function cate(){}
}
