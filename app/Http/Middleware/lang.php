<?php

namespace App\Http\Middleware;

use Closure;

class lang
{

    public function handle($request, Closure $next, $role)
    {
        dd(Session::get('lang'));
        return $next($request);
    }
}
