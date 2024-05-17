<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class adminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(isset(Auth::guard('admin')->user()->email))
      {
        return $next($request);
       
      }
     
      return redirect('/siteadmin/login')->with('error', 'Please Login to Proceed Further!!');
    }
}