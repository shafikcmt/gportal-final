<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session()->has('loginId') && (url('/student-login') == $request->url() || url('/student-registration') == $request->url())){
            return back();
        }
        return $next($request);
    }
}
