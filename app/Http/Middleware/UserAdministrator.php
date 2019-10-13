<?php

namespace App\Http\Middleware;

use Closure;

class UserAdministrator
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
        
        if ($current_user->role_id!=1) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}