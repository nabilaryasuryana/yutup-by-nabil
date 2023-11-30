<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TambahUserController extends Controller
{
    public function index() 
    {
        return view('AddUser.tambah');
    }

    public function tambah(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'JK' => 'required',
            'jurusan' => 'required',
            'profile_image' => 'required|image|mimes:jpg,png,gif,svg|max:2048',
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

        $gambarPath = $request->file('profile_image')->storeAs('images', $request->file('profile_image')->getClientOriginalName(), 'public');
        $name = $request->input('name');
        $JK = $request->input('JK');
        $jurusan = $request->input('jurusan');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        User::create([
            'name' => $name,
            'JK' => $JK,
            'jurusan' => $jurusan,
            'profile_image' => $gambarPath,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);

        return redirect('/Dashboard')->with('success', 'Tambah Data Berhasil!');
    }
}
