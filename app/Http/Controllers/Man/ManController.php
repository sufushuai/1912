<?php

namespace App\Http\Controllers\Man;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManController extends Controller
{
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
}
