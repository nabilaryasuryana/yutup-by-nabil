@extends('layouts.main')

@section('title', 'About')

@section('breadscrumb')
    <li aria-current="page">
        <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="/About"></a><span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">About</span>
        </div>
    </li>
@endsection

@section('content')
<div class="flex justify-center items-center h-screen overflow-hidden itim">
    <div class="bg-white p-8 rounded-lg mt-[-200px] shadow-md">
        <div class="flex justify-center"> 
           <img src="{{ asset('images/logo.png') }}" alt="Profile Image" class="w-32 h-32 object-cover">
        </div>
        <div class="mt-4 w-full">
                <h1 class="text-2xl font-bold text-center mt-1">Aplikasi Dashboard Nabil</h1>
                <p class="text-gray-600 mt-1">
                    Aplikasi Dashboard "TechHub SMKN 1 Kawali" dirancang untuk memberikan pengguna pengalaman yang komprehensif mengenai produk komponen komputer serta informasi terkait Sekolah Menengah Kejuruan Negeri 1 Kawali (SMKN 1 Kawali) dan jurusan Rekayasa Perangkat Lunak (RPL) di dalamnya.<br>

                    Fitur Utama:<br>
                    - Katalog Produk Komponen Komputer:<br>

                    Aplikasi ini menampilkan katalog lengkap produk komponen komputer yang tersedia di TechHub SMKN 1 Kawali. Pengguna dapat menjelajahi dan mencari berbagai produk seperti prosesor, kartu grafis, RAM, dan perangkat keras komputer lainnya.<br>
                    - Informasi Detil Produk:<br>

                    Setiap produk dalam katalog dilengkapi dengan informasi detil seperti spesifikasi teknis, harga, dan ketersediaan stok. Pengguna dapat membandingkan produk dan membuat keputusan pembelian yang informasional.<br>
                    - Galeri Visual:<br>

                    Untuk memberikan pengalaman visual, aplikasi ini menyertakan galeri gambar produk dengan tampilan close-up dan variasi produk untuk memberikan gambaran yang lebih baik kepada pengguna.<br>
                </p>                
        </div>
    </div>
</div>
@endsection