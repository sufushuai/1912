<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManController extends Controller
{
    /**
     * 个人中心
     */
    public function index(){
        return view("man/index");
    }
    /**
     *  个人信息
     */
    public function perinfo(){
        return view("man/perinfo");
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
     * 收藏
     */
    public function collect(){
        return view("man/collect");
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
