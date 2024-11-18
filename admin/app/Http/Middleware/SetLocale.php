<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');

        if ($locale && in_array($locale, config('app.supported_locales'))) {
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
