<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
     {
       switch ($guard) {
         case 'fuadmin':
           //If the user is authenticated as an 'admin'
           if (Auth::guard($guard)->check()) {
             return redirect()->route('fuadmin.home');
           }
           break;

        case 'answerer':
           if(Auth::guard($guard)->check()) {
             return redirect()->route('answerer.home');
           }
           break;

         default:
           if (Auth::guard($guard)->check()) {
               return redirect()->route('user.home');
           }
           break;
       }

       return $next($request);
     }
}
