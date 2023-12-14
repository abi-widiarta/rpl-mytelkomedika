<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3|max:15',
            'password' => 'required|max:15',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();  
            return redirect('/dashboard')->with('success','Login success');
        }

        return back()->withErrors([
            'login_error' => 'Incorrect username or password!',
        ]);
    }

    public function authenticateAdmin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3|max:15',
            'password' => 'required|max:15',
        ]);
        
        if (Auth::guard('admin')->attempt($credentials)) {
            
            $request->session()->regenerate();  
            
            return redirect('/admin/dashboard')->with('success','Login success');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function logoutAdmin(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
