<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Check if the user is authenticated and has the required role or is an admin
        if (Auth::check() && (Auth::user()->role == $role || Auth::user()->role == "admin")) {
            return $next($request);
        }

        // Return unauthorized response
        return response()->json(['msg' => "You don't have the permission to access this"], 403);
    }
}
