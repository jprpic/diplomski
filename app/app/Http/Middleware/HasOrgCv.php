<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasOrgCv
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
        $orgCv = Auth()->user()->orgCv;
        if($orgCv){
            return $next($request);
        }
        return redirect()->route('org-cv.create');
    }
}
