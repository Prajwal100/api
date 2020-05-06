<?php

namespace App\Http\Middleware;

use Closure;

class User
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
        if($request->user()->role=='user'){
            return $next($request);
        }
        else{
            request()->session()->flash('error','You have no permission to access');
            return redirect()->route($request->user()->role);
        }
    }
}
