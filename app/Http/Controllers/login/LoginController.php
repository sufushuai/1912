<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;


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
        $tel = $request->post("tel");
        $data=[
            "username"=>$username,
            "password"=>$password,
            "tel"=>$tel,
        ];
        $res=UserModel::insert($data);

        if($res){
            return $this->response(200,'ok');
        }else{
            return $this->response(1,'fail');
        }
    }

    /**
     * 登录
     */
    public function login(){
        return view('index.login');
    }
    /**
     * 执行登录
     */
    public function do_login(Request $request){
        $username = $request->post("username");
        $password = $request->post("password");
//        $tel = $request->post("tel");
        $data=[
            "username"=>$username,
            "password"=>$password,
        ];
        $res=UserModel::where($data)->first();
        if($res){
            return $this->response(200,'ok');
        }else{
            return $this->response(1,'fail');
        }
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
