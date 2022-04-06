<?php

namespace App\Http\Middleware;

use Closure;

class RevalidateBackHistory
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
        $response = $next($request);

        return $response->header('Cahce-control','nocache, no-store, max-age=0, must-revalidate')
        ->header('Pragma','no-cahce')
        ->header('Expires','Fri,01 Jan 1990 00:00:00 GMT');
    }
}
