<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecureHeadersMiddleware
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
        $response = $next($request);

        // Set security headers
        $response->headers->set('X-Frame-Options', 'DENY'); // Prevent clickjacking
        $response->headers->set('X-Content-Type-Options', 'nosniff'); // Prevent MIME-sniffing
        $response->headers->set('X-XSS-Protection', '1; mode=block'); // Enable XSS protection
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains'); // Enforce HTTPS
        $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade'); // Control referrer info
        // $response->headers->set('Content-Security-Policy', "default-src 'self'; font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com https://cdnjs.cloudflare.com https://use.fontawesome.com; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://code.jquery.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net https://checkout.razorpay.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com https://stackpath.bootstrapcdn.com https://maxcdn.bootstrapcdn.com; img-src 'self' data: https://maps.gstatic.com https://maps.googleapis.com; frame-src https://www.google.com https://www.youtube.com; connect-src 'self' https://api.razorpay.com; object-src 'none';");
    $response->headers->set('Content-Security-Policy', 
    "default-src 'self'; font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com https://cdnjs.cloudflare.com https://use.fontawesome.com data:; " . 
    "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://code.jquery.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net https://checkout.razorpay.com; " . 
    "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com https://stackpath.bootstrapcdn.com https://maxcdn.bootstrapcdn.com; " . 
    "img-src 'self' data: https://maps.gstatic.com https://maps.googleapis.com; " . 
    "frame-src https://www.google.com https://www.youtube.com https://api.razorpay.com; " . 
    "connect-src 'self' https://api.razorpay.com https://checkout.razorpay.com https://lumberjack.razorpay.com; " . 
    "object-src 'none';"
);

        
        return $response;
    }
}
