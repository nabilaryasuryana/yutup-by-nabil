@extends('layouts.main')

@section('title', 'Rekayasa Perangkat Lunak')

@section('breadscrumb')
    <li aria-current="page">
        <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="/RPL"></a><span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Rekayasa Perangkat Lunak</span>
        </div>
    </li>
@endsection

@section('content')
<div class="flex justify-center items-center h-screen overflow-auto min-h-min itim">
    <div class="bg-white p-8 rounded-lg mt-[-200px] shadow-md">
        <div class="flex justify-center"> 
           <img src="{{ asset('images/rpl.jpeg') }}" alt="Profile Image" class="w-32 h-32 rounded-full object-cover">
        </div>
        <div class="mt-4 w-full">
                <h1 class="text-2xl font-bold text-center mt-1">Rekayasa Perangkat Lunak</h1>
                <p class="text-gray-600 mt-1">
                    Rekayasa Perangkat Lunak (RPL) adalah salah satu jurusan di SMK Negeri 1 Kawali yang menawarkan pendidikan kejuruan dalam pengembangan perangkat lunak dan dunia pemrograman komputer. Jurusan ini dirancang untuk memberikan pemahaman mendalam dan keterampilan praktis kepada siswa dalam mengembangkan perangkat lunak yang berkualitas.<br>

                    Lingkup Materi dan Keterampilan:<br>
                    Pemrograman Komputer:<br>

                    Siswa diajarkan bahasa pemrograman seperti Java, C++, Python, atau bahasa pemrograman lainnya untuk memahami dasar-dasar pemrograman.<br>

                    Penerapan dalam Dunia Nyata:<br>
                    Siswa di jurusan RPL di SMK Negeri 1 Kawali tidak hanya belajar teori, tetapi juga terlibat dalam proyek-proyek praktis yang mencerminkan situasi dunia nyata. Hal ini memberikan kesempatan kepada mereka untuk mengaplikasikan pengetahuan yang diperoleh dalam proyek-proyek yang relevan dengan industri perangkat lunak.<br>

                    Peluang Karir:<br>
                    Lulusan jurusan Rekayasa Perangkat Lunak memiliki peluang karir yang luas, termasuk tetapi tidak terbatas pada:<br>

                    - Programmer/Developer Perangkat Lunak<br>
                    - Analisis Sistem<br>
                    - Pengembang Aplikasi Mobile<br>
                    - Spesialis Keamanan Perangkat Lunak<br>
                    - Administrator Basis Data<br>
                    - Manajer Proyek Perangkat Lunak<br>
                </p>                
        </div>
    </div>
</div>
@endsection