<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string|null  ...$guards
   * @return mixed
   */
  public function handle($request, Closure $next, $guard = "web")
  {
    switch ($guard) 
    {
        case 'admin':
        if (Auth::guard($guard)->check()) {
          return redirect('/admin');
        }
        break;

        case 'gestionnaire':
        if (Auth::guard($guard)->check()) {
          return redirect('/gestionnaire');
        }
        break;
        
        //        
    }
    
    if (Auth::guard($guard)->check()) {
      return redirect('/home');
    }

    return $next($request);
  }
}
