<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApprovalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if (!auth()->user()->approved_at) {
                auth()->logout();

                return redirect()->route('login')->with('message', trans(" Votre profil doit être approuvé par l'administrateur"));
            }
        }

        return $next($request);
    }
}
