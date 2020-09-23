<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;
<<<<<<< HEAD
use App\Model\CategoryModel;
=======
use App\Model\GoodsModel;
>>>>>>> f2380f201b5e1fa55144986b0a9008b982581a97

class IndexController extends Controller
{
    //首页
    public function index(){

        $slide=SlideModel::where('is_del',1)->limit(5)->get();
        $ad=AdModel::where('is_del',1)->limit(5)->get();
        $brand=BrandModel::where('status',1)->limit(10)->get();
<<<<<<< HEAD
        $obj = new CategoryModel;
        $where=[
            ['p_id','=',0],
        ];
        $category=$obj->where($where)->limit(6)->get();

        // dd($category);
        return view('index.index',['brand'=>$brand,'ad'=>$ad,'slide'=>$slide,'category'=>$category]);
    }
    //分类处理
    public function checkTypeData($pid=0){
        //获取数据

=======
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
>>>>>>> f2380f201b5e1fa55144986b0a9008b982581a97
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
    //无限极
    public function cate(){}
}
