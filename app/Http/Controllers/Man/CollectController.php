<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Model\GoodsModel;
use App\Model\CollectModel;
use App\Model\CategoryModel;

class CollectController extends Common
{
    /**
     * 我的收藏
     */
    public function collect(){
        $user_id=$this->user_id();
        $collect=CollectModel::leftjoin("shop_goods","shop_goods.goods_id","=","shop_collect.goods_id")->where("is_edit",1)->where("user_id",$user_id)->get();
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/collect/collect",compact("collect","floor1"));
    }
    /**
     *添加收藏
    */
    public function create(Request $request){
        $goods_id=$request->post("goods_id");
        $user_id=$this->user_id();
        if(empty($user_id)){
            return $this->error("请先进行登陆");
        }

        $goods_info=CollectModel::where("goods_id",$goods_id)->where("user_id",$user_id)->first();
        //判断数据库是否存在商品，不存在添加如数据，存在将是否删除字段改为1
        if(empty($goods_info)){
            $info=[
                "goods_id"=>$goods_id,
                "user_id"=>$user_id,
                "add_time"=>time()
            ];
            $data=CollectModel::insert($info);
            if($data){
                return $this->success();
            }else{
                return $this->error("收藏失败");
            }
        }else{
            $goods_edit=CollectModel::where("goods_id",$goods_id)->where("user_id",$user_id)->update(["is_edit"=>1]);
            if($goods_edit){
                return $this->success();
            }else{
                return $this->error("收藏失败");
            }
        }
    }
    public function delete(){
        $user_id=$this->user_id();
        if(empty($user_id)){
            return $this->error("请先进行登陆");
        }
        $goods_id=request()->post("goods_id");
        $data=CollectModel::where("goods_id",$goods_id)->update(["is_edit"=>2]);
        if($data){
            return $this->success();
        }else{
            return $this->error("取消收藏失败");
        }
    }
}
