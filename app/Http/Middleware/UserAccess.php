<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if (auth()->user()->type == $userType) {
            return $next($request);
        } else {
            if (auth()->user()->type == "student") {
                return redirect()->route('student.home');
            }
            if (auth()->user()->type == "teacher") {
                return redirect()->route('teacher.dashboard');
            }
            if (auth()->user()->type == "admin") {
                return redirect()->route('admin.dashboard');
            }
        }
        /* return response()->view('errors.check-permission'); */
    }
}
