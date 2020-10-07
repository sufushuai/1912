<?php

namespace App\Http\Middleware;

use Closure;
use function AlibabaCloud\Client\json;
use Illuminate\Support\Facades\Session;


class UserloginMiddleware
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
            $response=[
                "code"=>40001,
                "msg"=>"吴孟林温馨提示:请先登录进行操作"
            ];
            return response()->json($response);
        }
        return $next($request);
    }
}
