<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;
use App\Model\GoodsModel;

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
    //详情
    public function item(Request $request){

        $goods_id=$request->get('goods_id');
        $role_Info=GoodsModel::where('goods_id',$goods_id)->first();
        return view('index.item',['role_Info'=>$role_Info]);

    }
    //订单
    public function order(){
        return view('index.order');
    }
}
