<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSession
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('id')) {
            return $next($request);
        }

        // Handle the case where the session variable is not set
        return redirect()->route('login'); // Replace 'login' with the appropriate route name
    }
}
