<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Model\PerinfoModel;


class UserinfoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_id=Session::get("id");
        $userinfo=PerinfoModel::where("user_id",$user_id)->first();
        if(empty($userinfo)){
            $error=[
                "code"=>40001,
                "msg"=>"请务必先填写个人信息"
            ];
            return response()->json($error);
//            return redirect("/man/perinfo");
        }
        return $next($request);
    }
}
