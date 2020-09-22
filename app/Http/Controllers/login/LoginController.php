<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //注册
    public function register(){
        return view('index.register');
    }
    //登录
    public function login(){
        return view('index.login');
    }
}
