<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_info(){
        return view("order/order_info");
    }
    public function order_success(){
        return view("order/order_success");
    }
    public function order_error(){
        return view("order/order_error");
    }
}
