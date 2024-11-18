<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Session;
use Cache;
class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->status != '0') {
            return redirect()->route('login.page')->with('error', 'Your account is not active.');
        }
        else if(auth()->check()) {
            $user = Auth::user();
            $sess_id = Session::get('curSessionId');
            if($user->session_id != $sess_id){
                     Session::flush();
                     Cache::flush();
                    Auth::logout();
                $sess_idd = Session::get('curSessionId');
               return redirect('/')->with('error', 'Session Expired.');
            }
        }
        return $next($request);
    }
}
