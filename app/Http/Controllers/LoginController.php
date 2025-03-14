<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate user credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt authentication
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/dashboard'); // Redirect to the dashboard if login is successful
        }

        // If authentication fails, throw an error
        throw ValidationException::withMessages([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
