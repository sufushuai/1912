<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;
use App\Model\CategoryModel;
use App\Model\GoodsModel;

class IndexController extends Common
{
    //首页
    public function index(){
        //猜你喜欢
        $slide=SlideModel::where('is_del',1)->limit(5)->get();
        //广告
        $ad=AdModel::where('is_del',1)->limit(5)->get();
        //品牌
        $brand=BrandModel::where('status',1)->limit(20)->get();
          $where=[
                    'is_hot'=>1,
                    'is_show'=>1,
                    'is_new'=>1
                ];
        //无限极分类
        $guess=GoodsModel::where($where)->limit(12)->get()->toArray();
        //$guess=collect($guess)->toArray();
        $guess=array_chunk($guess,2,true);
        //dump($guess);die;
        //获取分类数据
        $category=CategoryModel::get()->toArray();
        //获取所有父级ID p_id
        //执行无极限
        $cate=$this->getcateInfo2($category);

        //今日推荐
        $today=GoodsModel::where('is_del',1)->orderby('goods_id','desc')->limit(4)->get();

        return view('index.index',['brand'=>$brand,'ad'=>$ad,'slide'=>$slide,'category'=>$cate,'guess'=>$guess,'today'=>$today]);
    }
 
    //购物车
    public function cart(){
        return view('index.cart');
    }
    //详情
    public function item(Request $request,$goods_id){

        $role_Info=GoodsModel::where('goods_id',$goods_id)->first();

        return view('index.item',['role_Info'=>$role_Info]);

    }
    //订单
    public function order(){
        return view('index.order');
    }
    //无限极
    public function cate(){}
}
