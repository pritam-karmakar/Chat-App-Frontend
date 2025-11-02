<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttachHeaderAuthToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If a token exists in session, bind it globally for all Http requests
        if (session()->has('auth_token')) {
            $token = session('auth_token');

            // Add default headers for all outgoing requests
            Http::macro('withAuth', function () use ($token) {
                return Http::withHeaders([
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ]);
            });
        }

        return $next($request);
    }
}
