<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class Admin
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
        $user = $request->user();
        if ($user && $user->hasRole('admin')) {
        return $next($request);
        }
        return redirect()->route('home');
    }
}
