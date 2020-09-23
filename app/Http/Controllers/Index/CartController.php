<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CartModel;

class CartController extends Controller
{
    public function cart(){
        $cart = CartModel::get();
        print_r($cart);
        return view('index.cart');
    }

}
