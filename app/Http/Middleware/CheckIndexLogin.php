<?php

namespace App\Http\Middleware;

use Closure;

class CheckIndexLogin
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
        if ($request->session()->has('uid')) {

            echo '<script>alert("未登录 去登陆吧😘");location.href="login";</script>';die;
        }else{
        }
        return $next($request);
    }
}
