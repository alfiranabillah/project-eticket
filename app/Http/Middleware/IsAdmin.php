<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        } else {
            if (Auth::check()) {
                return redirect('/')->with('error', 'You do not have permission to access this page.');
            }

            return redirect('/login')->with('error', 'You need to login to access this page.');
        }
    }
}

