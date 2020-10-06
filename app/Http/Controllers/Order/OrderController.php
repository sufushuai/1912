<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CartModel;

class OrderController extends Controller
{
    /**
     * 订单支付
     */
    public function order_info(){
        $order = rand(10000000000,99999999999);
        $cart = CartModel::get();
        return view("order/order_info",["order"=>$order/**,"cart"=>$cart*/]);
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
