<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateLogin
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
       if (!empty($request->input('username'))) {
          return redirect('test');
        }
       return $next($request);
    }

}
