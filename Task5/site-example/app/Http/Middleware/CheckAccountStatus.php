<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAccountStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        

        if (!$user || $user->status !== 'active') {

            return redirect()->route('up')
                ->with('error', 'Your account must be active to access this feature.');
        }

        return $next($request);
    }
}
