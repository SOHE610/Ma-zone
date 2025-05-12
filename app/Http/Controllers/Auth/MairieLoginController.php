<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MairieLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.mairie-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email_contact' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('mairie')->attempt([
            'email_contact' => $request->email_contact,
            'password' => $request->password,
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-mairie');
        }

        return back()->withErrors([
            'email_contact' => 'Email ou mot de passe incorrect.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('mairie')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/mairie/login');
    }
}
