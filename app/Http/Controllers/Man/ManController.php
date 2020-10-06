<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Common;
use App\Model\PerinfoModel;
use Illuminate\Http\Request;
use App\Model\AreaModel;
use App\Model\CategoryModel;

class ManController extends Common
{
    /**
     * 个人中心
     */
    public function index(){
        $floor1=CategoryModel::where('p_id',0)->get();
        return view("man/index",compact("floor1"));
    }
    /**
     *我的订单
     */
    public function pay(){
        $floor1=CategoryModel::where('p_id',0)->get();
        return view("man/pay",compact("floor1"));
    }

    /**
     *  浏览历史
    */
    public function history(){
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/history",compact("floor1"));
    }
    /**
    * 优惠卷
     */
    public function coupon(){
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/coupon",compact("floor1"));
    }
    /**
     * 地址管理
     */
    public function address(){
        $floor1=CategoryModel::where('p_id',0)->get();

        return view("man/address",compact("floor1"));
    }

}
