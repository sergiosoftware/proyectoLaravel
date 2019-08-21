<?php

namespace App\Http\Middleware;

use Closure;

class Ejemplo
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
        if (false) { // siempre fallará la validación si se deja en falso
            return $next($request);
        }
        return response('No tiene acceso', 404);
    }
}
