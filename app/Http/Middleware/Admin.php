<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('login'); // Redirect to login if not authenticated
        }

        // Get the authenticated user
        $user = Auth::user();

        // Check if the user has the required role
        if (!$user->admin) {
            // Optionally, you can redirect or abort with a 403 error
            return abort(403, 'Unauthorized access.');
        }

        // Allow request to proceed
        return $next($request);
    }
}
