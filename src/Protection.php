<?php

namespace App\Http\Middleware;

use Closure;
use MasterRO\DevProtection\Protector;

class Protection
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
        if (Protector::isBlocked() && ! $request->is('*protect')) {
            abort(500);
        }

        return $next($request);
    }
}
