<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HeaderNav
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $headerNav = ['headerNav'=>['Home','About','Article']];
        $request->attributes->add($headerNav);
        // $headerNav = ['Home','About','Blog'];
        // dump(date('Y-m-d H:i:s', time()));
        return $next($request);
    }
}
