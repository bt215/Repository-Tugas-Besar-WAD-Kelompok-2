<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class check_login_pembeli
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
        if (Session::get("logged_in") == false) {
            return redirect("login_pembeli");
        }
        return $next($request);
    }
}
