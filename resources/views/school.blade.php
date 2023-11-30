@extends('layouts.main')

@section('title', 'SMKN 1 Kawali')

@section('breadscrumb')
    <li aria-current="page">
        <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="/School"></a><span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">School</span>
        </div>
    </li>
@endsection

@section('content')
<div class="flex justify-center items-center h-screen overflow-hidden itim">
    <div class="bg-white p-8 rounded-lg mt-[-200px] shadow-md">
        <div class="flex justify-center"> 
           <img src="{{ asset('images/smk.png') }}" alt="Profile Image" class="w-32 h-32 object-cover">
        </div>
        <div class="mt-4 w-full">
                <h1 class="text-2xl font-bold text-center mt-1">SMKN 1 Kawali</h1>
                <p class="text-gray-600 mt-1">
                    SMK Negeri 1 Kawali merupakan sekolah kejuruan yang terletak di Ciamis, Jawa Barat, Indonesia. Sekolah ini menawarkan berbagai jurusan yang mencakup berbagai bidang keahlian.<br>
                
                    Beberapa jurusan yang tersedia di SMK Negeri 1 Kawali antara lain:<br>
                
                    - Rekayasa Perangkat Lunak (RPL): Fokus pada pengembangan perangkat lunak dan pemrograman komputer.<br>
                    - Teknik Komputer dan Jaringan (TKJ): Menyediakan pembelajaran dalam pengelolaan jaringan komputer dan sistem teknologi informasi.<br>
                    - Teknik Kendaraan Ringan: Memiliki fokus pada keterampilan teknis terkait perawatan dan perbaikan kendaraan bermotor ringan.<br>
                    - Akuntansi Keuangan Lembaga: Memberikan pemahaman mendalam dalam bidang akuntansi dan keuangan untuk lembaga atau organisasi.<br>
                    - Desain Pemodelan dan Informasi Bangunan: Menyediakan pengetahuan dan keterampilan dalam desain, pemodelan, dan informasi bangunan.<br>
                    - Seni Karawitan: Berfokus pada seni tradisional Indonesia, khususnya seni musik Karawitan.<br>
                    - Otomatisasi Tata Kelola Perkantoran: Menawarkan pembelajaran terkait otomatisasi dan manajemen perkantoran.<br>
                
                    SMK Negeri 1 Kawali didedikasikan untuk memberikan pendidikan kejuruan yang berkualitas dan relevan dengan tuntutan pasar kerja. Dengan menawarkan beragam jurusan, sekolah ini memberikan siswa kesempatan untuk mengembangkan keterampilan dan pengetahuan dalam bidang yang sesuai dengan minat dan bakat mereka.
                </p>                
        </div>
    </div>
</div>
@endsection