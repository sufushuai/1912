<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common;
use App\Model\RbacUser;
use Illuminate\Support\Facades\Redis;
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
        //轮播图
        $slide=SlideModel::where('is_del',1)->limit(5)->get();
        //广告
        $ad=AdModel::where('is_del',1)->limit(5)->get();
        //品牌
        $brand=BrandModel::where('status',1)->limit(16)->get();
          $where=[
                    'is_hot'=>1,
                    'is_show'=>1,
                    'is_new'=>1
                ];
        //猜你喜欢
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
        $today=GoodsModel::where('is_del',1)->orderby('goods_clicknum','desc')->limit(4)->get();

        return view('index.index',['brand'=>$brand,'ad'=>$ad,'slide'=>$slide,'category'=>$cate,'guess'=>$guess,'today'=>$today]);
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


        $goods_price = request()->post("goods_price");

        $where =[
            "goods_price"=>$goods_price
        ];
        $res=CartModel::insert($where);
        if($res){
            return $this->success(200,'ok');
        }else{
            return $this->error(1,'fail');
        }
    }
    //详情
    public function item(Request $request,$goods_id){
        $key="num".$goods_id;
        if(Redis::get($key)){
            Redis::incr($key);
        }else{
            Redis::set($key,1);
        }
        $where=[
            'goods_clicknum'=>Redis::get($key)
        ];

        GoodsModel::where('goods_id',$goods_id)->update($where);
        $role_Info=GoodsModel::where('goods_id',$goods_id)->first();

        return view('index.item',['role_Info'=>$role_Info]);

    }

    //订单
    public function order(){
           // echo count(strlen("http://php.net"));die;
//            $z=2;
//            $x=$z+$z+$z=3;
//            echo $x;die;
//            $a=array(1,2);
//            foreach($a as $k=>&$v){$v=4;}
//            function t($s){foreach($s as $k => &$v){$v=5;}return $s;}
//            $b=t($a);
//            var_dump($b);die;
//           // var_dump($a);die;

        return view('index.order');
    }
    //无限极
    public function cate(){
    }
}
