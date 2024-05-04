<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if ($guard == "admin") {
                if(Auth::guard($guard)->check())
                {
                    return redirect('/siteadmin');
                }
                else{
                    return redirect('/siteadmin/login');
                }
            }
            if (Auth::guard($guard)->check()) {
                Session::flash('success', 'Logged In Successfully!');
                if($request->url!==null)
                {
                    return Redirect::to(''.$request->url);
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
