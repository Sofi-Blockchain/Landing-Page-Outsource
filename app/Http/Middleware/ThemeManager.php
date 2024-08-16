<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class ThemeManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('locale')) {
            session()->put('locale', config('theme.language')[0]);
        }
        if (!session()->has('mode')) {
            session()->put('mode', config('theme.mode')[0]);
        }
        App::setLocale(session()->get('locale'));
        return $next($request);
    }
}