<?php
// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProductController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi formulir
        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Simpan gambar ke folder public/images
        $gambarPath = $request->file('image')->storeAs('images', $request->file('image')->getClientOriginalName(), 'public');
        
        // Ambil data dari formulir
        $name = $request->input('name');

        // Simpan data produk ke database
        Produk::create([
            'name' => $name,
            'image' => $gambarPath,
        ]);

        return redirect('/')->with('success', 'Produk berhasil diunggah!');
    }
}
