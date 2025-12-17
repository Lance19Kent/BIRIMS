<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate form input INCLUDING the terms checkbox
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'agree' => ['accepted'], // <- MUST be checked
        ], [
            'agree.accepted' => 'You must agree to the Terms and Privacy Policy.',
        ]);

        // Authenticate user
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'Incorrect email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
