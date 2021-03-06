<?php

namespace App\Http\Middleware\Permission;

use Closure;
use App\Exceptions\Permission\UnauthorizedException;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (auth()->guest()) {
            throw UnauthorizedException::notLoggedIn();
        }

        if (!auth()->user()->hasRole($roles)) {
            throw UnauthorizedException::forRoles($roles);
        }

        return $next($request);
    }
}
