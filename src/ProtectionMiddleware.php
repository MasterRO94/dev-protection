<?php

namespace MasterRO\DevProtection;

use Closure;

class ProtectionMiddleware
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
        if (Protector::isBlocked() && ! $request->is('*/protection/*')) {
            abort(500);
        }

        return $next($request);
    }
}
