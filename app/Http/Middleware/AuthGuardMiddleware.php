<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Staff;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AuthGuardMiddleware
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
        if ($request->method() === 'POST' && $request->route()->getName() === 'auth.login') {
            if (User::where('email', $request->email)->exists()) {
                if (User::where('email', $request->email)->where('status', true)->exists()) {
                    $request->request->add(['guard' => 'user']);
                    return $next($request);
                }
                return back()->with('error', 'account is restricted');
            }

            if (Staff::where('email', $request->email)->exists()) {
                if (Staff::where('email', $request->email)->where('status', true)->exists()) {
                    $request->request->add(['guard' => 'staff']);
                    return $next($request);
                }
                return back()->with('error', 'account is restricted');
            }

            if (Admin::where('email', $request->email)->exists()) {
                if (Admin::where('email', $request->email)->where('status', true)->exists()) {
                    $request->request->add(['guard' => 'admin']);
                    return $next($request);
                }
                return back()->with('error', 'account is restricted');
            }

            return back()->with('error', 'invalid credentials');
        }
        return $next($request);
    }
}
