<?php

namespace App\Http\Middleware;

use Closure;

class john_aries
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { if ((Auth::check() && Auth::user()->hasRole("super admin")) || (Auth::check() && Auth::user()->hasRole("admin")) || (Auth::check() && Auth::user()->hasRole("user"))) {
        return $next($request);

    }

    return redirect('/login')->with('error', 'You do not have access to this page.');
    }
}