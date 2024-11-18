<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Support\Facades\URL;

// class AppendLocaleToUrls
// {
//     public function handle($request, Closure $next)
//     {
//         // Get the current locale from the request or fallback
//         $locale = app()->getLocale();

//         // Only append locale if the route requires it (i.e., it has {locale} in the URL)
//         if ($request->route() && $request->route()->parameter('locale')) {
//             // Automatically append the locale to all route generation calls
//             URL::defaults(['locale' => $locale]);
//         }

//         return $next($request);
//     }
// }

