<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EditController extends Controller
{
    public function index(Request $request) 
    {
        $id = request('id');
        $user = User::findOrFail($id);
        return view('edit.edit', ['user' => $user]);
    }

    public function FiturDisabled($id) {
        return redirect(route('editpage', $id))->with('error', 'Fitur edit masih dalam tahap pengembangan kemungkinan tidak dapat dipakai!');
        $id = request('id');
        $user = User::findOrFail($id);
        return view('edit.edit', ['user' => $user]);
    }

    public function edit(Request $request, $id)
    {
        $data = User::find($id);

        if (!$data)
        {
            return redirect('/Dashboard')->with('error', 'Gagal Menghapus Data! Data Tidak Ditemukan!');
        }

        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'JK' => 'required',
            'jurusan' => 'required',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:16'
        ]);

        User::create($ValidatedData);
        $data->delete();
        return redirect('/Dashboard')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy(Request $request, $id) 
    {
        $data = User::find($id);

        if (!$data)
        {
            return redirect('/Dashboard')->with('error', 'Gagal Menghapus Data! Data Tidak Ditemukan!');
        }
        $data->delete();

        return redirect('/Dashboard')->with('success', 'Data berhasil dihapus!');
    }
    public function destroyProduct(Request $request, $id) 
    {
        $data = produk::find($id);

        if (!$data)
        {
            return redirect('/Dashboard/Product')->with('error', 'Gagal Menghapus Data! Data Tidak Ditemukan!');
        }
        $data->delete();

        return redirect('/Dashboard/Product')->with('success', 'Data berhasil dihapus!');
    }
}
