<?php

namespace App\Http\Middleware;

use Closure;

class UserCustomer
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
        $current_user=\Auth::user();
        
        if ($current_user->isCustomer()) {
            return $next($request);
        }
        abort(403, 'Unauthorized action.');
    }
}