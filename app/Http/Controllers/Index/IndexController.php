<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common;
use App\Model\RbacUser;
use Illuminate\Http\Request;
use App\Model\BrandModel;
use App\Model\AdModel;
use App\Model\SlideModel;
use App\Model\CartModel;
use App\Model\CategoryModel;
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

        //获取分类数据
        $category=CategoryModel::get()->toArray();
        //获取所有父级ID p_id
        //执行无极限
        $cate=$this->getcateInfo2($category);

        return view('index.index',['brand'=>$brand,'ad'=>$ad,'slide'=>$slide,'category'=>$cate,'guess'=>$guess]);
    }

    //购物车
    public function cart(){
        $cart = CartModel::where(['is_del'=>1])->get();
        return view('index.cart',['cart'=>$cart]);
    }
    //购物车删除
    public function cartdestroy(){
        $cart_id = request()->post('cart_id');
        $res = CartModel::where('cart_id',$cart_id)->update(["is_del"=>2]);
        if($res){
            return $this->success();
        }else{
            return $this->error("删除失败");
        }
    }
    public function cartdel(){
        $cart_id=request()->post('strIds');
        //把传来的所有id改为数组形式  explode  字符串转数组
        $str = explode(",",$cart_id);
        //dd($str);
        //利用循环将需要删除的id 一个一个进行执行sql；
        foreach($str as $k => $v){
            $res=CartModel::destroy($v);
        }
        //dd($res);
        if($res){
            return $this->success();
        }else{
            return $this->error("删除失败");
        }
    }
    //成功加入购物车
    public function success_cart(){
        return view('index.success_cart');
    }
//    //购物车改变数量
//    public function cartadd(Request $request){
//        $minus = $request->post('minus');
//        $add = $request->post('add');
//        dd($minus);
//        dd($add);
//        return view('index.cart');
//    }
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
