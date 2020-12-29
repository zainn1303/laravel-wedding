<?php

namespace App\Http\Middleware;

use Closure;

class CekCustomerMiddleware
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
        if (!session('id_customer')) {
            return redirect('/');
        }
        return $next($request);
    }
}
