<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class user
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
        if(!Auth::check()){
            return redirect()->route('auth.login');
        }
        //role 
        if(Auth::user()->role==1){
            return redirect()->route('dashboard');
        }
        
        if(Auth::user()->role==2){
            return redirect()->route('user.home');

            return $next($request);
        }
    }
}
