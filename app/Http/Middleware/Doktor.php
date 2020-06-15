<?php

namespace App\Http\Middleware;

use Closure;

use Auth;
class Doktor
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('admin_view');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('staff_view');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('customer_view');
        }

        if (Auth::user()->role == 2) {
            return $next($request);
        }
    }
}
