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
//            dd($userinfo);
            return redirect("/man/perinfo");
        }
        return $next($request);
    }
}
