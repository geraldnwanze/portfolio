<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Admin;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email','password');
        
        if (!Auth::guard($request->guard)->attempt($credentials)) {
            return back()->with('error', 'invalid credentials');
        }
        // dd($request->guard.'.index');
        return redirect()->route($request->guard.'.index');
    }

    public function logout()
    {
        Auth::logout();
        session()->regenerate();
        return redirect()->route('auth.index');
    }
}
