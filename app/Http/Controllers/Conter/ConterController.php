<?php

namespace App\Http\Controllers\Conter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConterController extends Controller
{
    /**
     * 中间件跳转登陆页面
     */
    public function login(){
        return view("href/login");
    }
    /**
     * 中间件跳转个人信息
     */
    public function perinfo(){
        return view("href/perinfo");
    }
}
