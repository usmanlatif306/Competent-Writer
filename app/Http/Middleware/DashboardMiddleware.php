<?php

namespace App\Http\Middleware;

use Closure;

class DashboardMiddleware
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
        // $user = auth()->user();
        // if ($user->hasRole('admin')) {
        //     return redirect()->route('admin_dashboard');
        // } elseif ($user->hasRole('staff')) {
        //     return redirect()->route('tasks_list');
        // } else {
        //     return $next($request);
        // }
        return $next($request);
    }
}
