<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                switch(Auth::user()->role_id){
                    case '300':
                    $this->redirectTo = 'admin';
                    return redirect()->route('admin');
                        break;
                    case '200':
                        $this->redirectTo = 'librarian';
                         return redirect()->route('librarian');
                        break;
                    case '100':
                        $this->redirectTo = 'student';
                         return redirect()->route('student');
                        break;
                    default:
                        $this->redirectTo = 'login';
                        return redirect()->route('login');
                }
            }
        }

        return $next($request);
    }
}
