<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login.index');
    }

    public function authenticate(Request $request) {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/Dashboard')->with('success', 'Login Berhasil! Selamat datang di halaman Dashboard!');
        }

        return back()->with('LoginError', 'Login Failed!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
