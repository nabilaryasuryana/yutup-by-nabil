<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'JK' => 'required',
            'jurusan' => 'required',
            'username' => ['required', 'min:3', 'max:25', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:16'
        ]);

        $pass = $request->input('password');
        $repass = $request->input('repassword');

        if ($pass !== $repass)
        {
            return back()->with('error', 'Registrasi Gagal Password Tidak cocok!');
        }

        User::create($validateData);

        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/Dashboard')->with('success', 'Registrasi Berhasil! Selamat datang di halaman Dashboard!');
        }

        return back()->with('LoginError', 'Login Failed!');

    }
}
