<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Redirect admin to admin dashboard
                if ($guard === 'admin') {
                    return redirect()->route('admin.dashboard');
                }
                // Redirect regular users to home
                return redirect('/');
            }
        }

        return $next($request);
    }
}
