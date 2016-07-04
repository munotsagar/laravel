<?php

namespace App\Http\Middleware;

use Closure;

class basicAuthontication
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
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        print_r($_SERVER);exit;
        //  exit;
        return $next($request);
    }
}
