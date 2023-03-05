<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckStandard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $standard): Response
    {
        if ($request->user()->standard != $standard && $request->user()->standard != '0') {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
