<?php

namespace App\Http\Middleware;

use Closure;

class CreatePaintings
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
     //dd($request);
        if ($request->title == "welcome") {
            return redirect('welcome');
        }
        return $next($request);
    }
}
