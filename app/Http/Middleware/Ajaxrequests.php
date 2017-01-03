<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Ajaxrequests
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

//
//        if( !$request->ajax() && !$request->wantsJson()) {
//            return redirect()->guest('login');
//        }
        header("content-type:json;charset=utf-8");
        return $next($request);
    }
}
