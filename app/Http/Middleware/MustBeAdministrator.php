<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
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
        # $request->user(); // $user or null

        $user = $request->user();

        if ($user && $user->username == 'stefan') {
            return $next($request);
        }

        abort(404, 'No way.');

    }
}
