<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class UserMiddleware
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
        if(empty(Session::has('id'))){
            $error=[
                "code"=>100,
                "msg"=>"请先登陆后操作"
            ];
            return response()->json($error);
//            return redirect("/index/login");
        }
        return $next($request);
    }
}
