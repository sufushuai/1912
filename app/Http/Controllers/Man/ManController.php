<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Common;
use App\Model\PerinfoModel;
use Illuminate\Http\Request;
use App\Model\AreaModel;

class ManController extends Common
{
    /**
     * 个人中心
     */
    public function index(){
        return view("man/index");
    }
    /**
     *我的订单
     */
    public function pay(){
        return view("man/pay");
    }

    /**
     *  浏览历史
    */
    public function history(){
        return view("man/history");
    }
    /**
    * 优惠卷
     */
    public function coupon(){
        return view("man/coupon");
    }
    /**
     * 地址管理
     */
    public function address(){
        return view("man/address");
    }
    /**
     *待评价
    */
    public function evaluate(){
        return view("man/evaluate");
    }
    /**
     *待收货
     */
    public function received(){
        return view("man/evaluate");
    }

}
