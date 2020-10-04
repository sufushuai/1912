<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Model\GoodsModel;
use App\Model\CollectModel;

class CollectController extends Common
{
    /**
     * 我的收藏
     */
    public function collect(){
        $collect=CollectModel::leftjoin("shop_goods","shop_goods.goods_id","=","shop_collect.goods_id")->where("is_edit",1)->get();
        return view("man/collect/collect",compact("collect"));
    }
    /**
     *添加收藏
    */
    public function create(Request $request){
        $goods_id=$request->post("goods_id");
        $user_id=$this->user_id();

        $goods_info=CollectModel::where("goods_id",$goods_id)->first();
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
            $goods_edit=CollectModel::where("goods_id",$goods_id)->update(["is_edit"=>1]);
            if($goods_edit){
                return $this->success();
            }else{
                return $this->error("收藏失败");
            }
        }
    }
    public function delete(){
        $goods_id=request()->post("goods_id");
        $data=CollectModel::where("goods_id",$goods_id)->update(["is_edit"=>2]);
        if($data){
            return $this->success();
        }else{
            return $this->error("取消收藏失败");
        }
    }
}
