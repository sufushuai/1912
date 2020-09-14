<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * 订单支付
     */
    public function order_info(){
        return view("order/order_info");
    }
    /**
     * 支付成功
     */
    public function order_success(){
        return view("order/order_success");
    }
    /**
     * 支付失败
     */
    public function order_error(){
        return view("order/order_error");
    }
}
