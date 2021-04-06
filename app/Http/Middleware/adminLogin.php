<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class adminLogin
{
    const GUARD_ADMIN = 'admin';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if (Auth::guard(self::GUARD_ADMIN)->check()) {
            return $next($request);
        }
        return redirect()->route('web.login');
    }
}
