<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->input('q') !== '' || $request->input('q') !== null || $request->input('q') !== 0) 
        {
            $q = $request->input('q');
            $data = produk::where('name', 'LIKE', "%$q%")->orderBy('name')->get();
            if ($data->isEmpty())
            {
                $data = null;
                return view('index', ['data' => $data])->with('error', 'Data tidak ditemukan');
            } else 
            {
                $i = 1;

                $data->each(function ($data) use (&$i) {
                    $data->i = $i;
                    $i++;
                });
                return view('index', ['data' => $data]);
            }

        } else 
        {
            $data = produk::orderBy('name')->get();
            $i = 1;

            $data->each(function ($data) use (&$i) {
                $data->i = $i;
                $i++;
            });
            return view('index', ['data' => $data]);
        }

    }
}
