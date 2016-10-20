<?php

namespace App\Http\Middleware;

use Closure;

class IsAjaxMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        define('IS_AJAX', $request->ajax());
        return $next($request);
    }
}
