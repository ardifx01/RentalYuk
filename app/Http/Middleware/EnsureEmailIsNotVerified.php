<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureEmailIsNotVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->hasVerifiedEmail()) {
            $role = $request->user()->role;

            if ($role === 'owner') {
                return redirect('/owner/dashboard');
            } elseif ($role === 'admin') {
                return redirect('/admin/dashboard');
            }
        }

        return $next($request);
    }
}
