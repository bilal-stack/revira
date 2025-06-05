<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Only set locale if it's not already manually selected
        if (!session()->has('locale')) {
            // Supported languages
            $supportedLocales = ['en', 'fr', 'de', 'es', 'ar'];

            // Detect browser-preferred language
            $locale = $request->getPreferredLanguage($supportedLocales);

            // Fallback if not matched
            if (!in_array($locale, $supportedLocales)) {
                $locale = config('app.fallback_locale');
            }

            session(['locale' => $locale]);
        }

        App::setLocale(session('locale'));

        return $next($request);
    }
}
