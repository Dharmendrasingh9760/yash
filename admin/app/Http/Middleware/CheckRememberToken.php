<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Support\Facades\Auth;
 
class CheckRememberToken
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $sessionToken = session('session_id');
 
            if ($sessionToken !== $user->session_id) {
                Auth::logout();
 
                session()->forget('session_id');
 
                return redirect()->route('login.page')->with('error', 'You have been logged out due to logging in from another location.');
            }
        }
 
        return $next($request);
    }
}