<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
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
        // Haal gebruiker op uit de request
        if($user = $request->user()) {

            // Check of deze is_amdin op 1 heeft staan
            if($user->is_admin === 1) {
                // Zo ja, ga naar $next middleware
                return $next($request);
            }
            // Anders een acces denied pagina
            abort(403);
        }
    }
}
