<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }
    public function login(){
        return view('index.login');
    }
    public function register(){
        return view('index.register');
    }
    public function cart(){
        return view('index.cart');
    }
}
