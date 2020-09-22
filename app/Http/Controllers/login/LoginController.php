<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * 注册
     */
    public function register(){
        return view('index.register');
    }
    /**
     * 执行注册
     */
    public function do_register(Request $request){
        $username = $request->post("username");
        $password = $request->post("password");
        $password1 = $request->post("password1");
        $tel = $request->post("tel");
        $data=[
            "username"=>$username,
            "password"=>$password,
            "password1"=>$password1,
            "tel"=>$tel,


        ];

        return view('index.register');
    }

    //登录
    public function login(){
        return view('index.login');
    }


    protected function response($errno,$msg,$data=[]){
        $arr=[
            'errno'=>$errno,
            'msg'=>$msg,
            'data'=>$data,
        ];
        return $arr;
    }
}
