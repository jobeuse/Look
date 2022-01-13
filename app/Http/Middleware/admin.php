<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class admin
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
        

         if (Auth::user() &&  Auth::user()->is_admin == 1) {
             return $next($request);
        }

        return redirect('home')->with('error','You have not admin access');
        
    }
}
