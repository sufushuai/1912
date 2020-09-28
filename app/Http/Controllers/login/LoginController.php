<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;
use App\Model\SendcodeModel;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;


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
        $code = $request->post("code");

        //手机号是否唯一性
        $tel_one=UserModel::where(["tel"=>$tel])->first();
        if($tel_one){
            return json_encode(['errno'=>1,'msg'=>"手机号已存在"]);
        }
        //判断验证码
        $tel_code=SendcodeModel::where(["tel"=>$tel])->orderby("id","desc")->first();
        if(empty($tel_code)){
            return json_encode(['errno'=>1,'msg'=>"请输入正确短信验证码"]);
        }
        if($code!=$tel_code->code||empty($tel_code->code)){
            return json_encode(['errno'=>1,'msg'=>"验证码错误,请重新输入验证码"]);
        }
        //验证码过期时间5分钟
        if(time()-$tel_code->add_time>300){
            return json_encode(['errno'=>1,'msg'=>"验证码已过期,请重新获取"]);
        }

        $user_data=[
            "username"=>$username,
            "password"=>password_hash($password,PASSWORD_DEFAULT),
            "tel"=>$tel,
            "reg_time"=>time()
        ];
        $user=UserModel::insert($user_data);

        if($user){
            return $this->response(200,'注册成功');
        }else{
            return $this->response(1,'注册失败');
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
        $user=UserModel::where(["username"=>$username])->first();
        $res=password_verify($password,$user->password);
        if($res){
          
            return $this->response(200,'ok');
        }else{
            return $this->response(1,'fail');
        }
    }

    public function sendtel(Request $request){
        $tel=$request->post("tel");
        $code=rand(10000,99999);
        AlibabaCloud::accessKeyClient('LTAI4GDEXS9VCLfHE4nHyrit', 'oH94oME4og7Nubt6bJXT03WOi7ML4X')
            ->regionId('cn-hangzhou')
            ->asDefaultClient();

        try {
            $result = AlibabaCloud::rpc()
                ->product('Dysmsapi')
                // ->scheme('https') // https | http
                ->version('2017-05-25')
                ->action('SendSms')
                ->method('POST')
                ->host('dysmsapi.aliyuncs.com')
                ->options([
                    'query' => [
                        'RegionId' => "cn-hangzhou",
                        'PhoneNumbers' =>$tel,
                        'SignName' => "风也这样",
                        'TemplateCode' => "SMS_178760828",
                        'TemplateParam' => "{code:$code}",
                    ],
                ])
                ->request();
            $code_data=[
                "tel"=>$tel,
                "code"=>$code,
                "add_time"=>time()
            ];
            SendcodeModel::insert($code_data);
            return ($result->toArray());
        } catch (ClientException $e) {
            return  $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            return  $e->getErrorMessage() . PHP_EOL;
        }
    }

    /**
     *封装方法
    */
    protected function response($errno,$msg,$data=[]){
        $arr=[
            'errno'=>$errno,
            'msg'=>$msg,
            'data'=>$data,
        ];
        return $arr;
    }
}
