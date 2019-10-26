<?php

namespace App\Http\Middleware;

use Closure;

class UserEmployee
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
        if (Auth::check())
        {
            if(Auth::user()->isEmployee())
            {
                return $next($request);
            }
            abort(403, 'Unauthorized action.');
        }      
    }
}