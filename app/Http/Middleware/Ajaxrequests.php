<?php

namespace App\Http\Middleware;

use Closure;

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
        if( !$request->ajax() && !$request->wantsJson()) {
            return response("Unauthorized.", 401);
        }
        header('charset:utf-8');
        return $next($request);
    }
}
