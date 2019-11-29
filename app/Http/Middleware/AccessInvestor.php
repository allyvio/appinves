<?php

namespace App\Http\Middleware;

use Closure;

class AccessInvestor
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
        if (Auth::user()->hasAnyRole('investor')) {
            return $next($request);
        }
        return redirect('/');
    }
}
