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
        if ($request->title == "paintings") {
            return redirect('paintings');
        }
        return $next($request);
    }
}
