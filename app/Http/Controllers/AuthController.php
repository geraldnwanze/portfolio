<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email','password');
        if (User::where('email', $request->email)->exists()) {
            if ($this->active()) {
                if (Auth::attempt($credentials)) {
                    return redirect()->route(auth()->user()->role.'.index');
                }
                return back()->with('error', 'invalid credentials');
            }
            return back()->with('error', 'account is restricted');
        }
        return back()->with('error', 'invalid credentials');
    }

    public function logout()
    {
        Auth::logout();
        session()->regenerate();
        return redirect()->route('auth.index');
    }

    private function active()
    {
        return User::where('email', request()->email)->where('status', true)->exists() ? true : false;
    }
}
