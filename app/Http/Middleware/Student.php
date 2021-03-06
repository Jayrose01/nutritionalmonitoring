<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Student
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
        if (auth()->check()) {
            if (auth()->user()->user_type_id == 1) {
                return redirect('/admin');
            }elseif (auth()->user()->user_type_id == 2) {
                return redirect('/teacher');
                
            }elseif (auth()->user()->user_type_id == 3) {
                return redirect('/parents');
            }else{
                
                return $next($request);
            }

             return redirect()->route('login');
        }
         return redirect()->route('login');
    }
}
