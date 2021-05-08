<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->id_role == 1) {
            return redirect()->route('Admin.Dashboard');
        } elseif(Auth::guard($guard)->check() && Auth::user()->id_role == 2){
            return redirect()->route('user.dashboard');
        } else {
            return $next($request);
        }
    }
}
