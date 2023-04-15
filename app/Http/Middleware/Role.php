<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  ...$role)
    {
        // dd('masuk midleware', $request->user()->role->name);
        if (in_array($request->user()->role->name, $role)) {
            return $next($request);
        } else {
            abort(404);
        }
    }

}
