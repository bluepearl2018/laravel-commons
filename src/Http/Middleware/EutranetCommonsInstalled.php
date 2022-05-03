<?php

namespace Eutranet\Commons\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Schema;
use Flash;

class EutranetCommonsInstalled
{
    public function handle($request, Closure $next)
    {
        dump('EutranetCommonsInstalled');
        if (!Schema::hasTable('countries')) {
            Flash::error('Please install Eutranet frontend.');
            return redirect()->route('install');
        }
        return $next($request);
    }
}
