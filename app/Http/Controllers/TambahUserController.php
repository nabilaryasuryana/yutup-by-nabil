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
            'username' => ['required', 'min:3', 'max:25', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:16'
        ]);

        User::create($validateData);

        return redirect('/Dashboard')->with('success', 'Tambah Data Berhasil!');
    }
}
