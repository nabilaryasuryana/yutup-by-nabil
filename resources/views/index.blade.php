<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Aplikasi Dashboard Nabil')

@section('content')
    

<div id="gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
         @if ($data !== NULL)
         @foreach ($data as $d)
        <div class="hidden duration-700 ease-in-out flex text-center bg-white bg-opacity-60" data-carousel-item>
            <img src="{{ asset('storage/' . $d['image']) }}" class="absolute object-contain block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
            <p class="itim mt-n3 bg-white rounded-lg p-3 fixed align-bottom font-bold bottom-0">{{ $d['name'] }}</p>
        </div>
        @endforeach
        @endif
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-dark-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-dark-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-dark-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
        @if(session()->has('success'))
        <div id="success" class="w-auto rounded-xl min-w-fit px-5 py-2 grid grid-flow-row-dense justify-center align-middle self-center mx-auto bg-opacity-90 bg-green-700">
            <p class="itim">{{ session('success')}}</p>
            <div class="align-end justify-end flex">
                <button onclick="closeAlert('success')" class="justify-center rounded-md border p-1 bg-sky-600 mx-auto self-center text-white itim hover:border-sky-300 hover:bg-sky-700 border-gray-500">close</button>
            </div>
            <script>
                function closeAlert(alert) {
                    let AlertContainer = document.getElementById(alert);
                    AlertContainer.classList.add("hidden");
                    AlertContainer.classList.add("lg:hidden");
                }
            </script>
            <!-- <script>
                alert('{{ session("success") }}');
            </script> -->
        </div>
        @endif
        @if(session()->has('error'))
        <div id="error" class="w-auto rounded-xl min-w-fit px-5 py-2 grid grid-flow-row-dense justify-center align-middle self-center mx-auto bg-opacity-90 bg-green-700">
            <p class="itim">{{ session('error')}}</p>
            <div class="align-end justify-end flex">
                <button onclick="closeAlert('error')" class="justify-center rounded-md border p-1 bg-sky-600 mx-auto self-center text-white itim hover:border-sky-300 hover:bg-sky-700 border-gray-500">close</button>
            </div>
            <script>
                function closeAlert(alert) {
                    let AlertContainer = document.getElementById(alert);
                    AlertContainer.classList.add("hidden");
                    AlertContainer.classList.add("lg:hidden");
                }
            </script>
            <!-- <script>
                alert('{{ session("success") }}');
            </script> -->
        </div>
        @endif
        @auth
        <button onclick="toggleSidebar('tambahProduk')" class="absolute right-3 bottom-10 p-2 rounded-lg bg-blue-700"><span class="material-icons">add</span></button>
        @endauth

    <div id="tambahProduk" class="absolute hidden inset-0 z-999 flex items-center justify-center" style="z-index: 999;">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="flex grow">
                <h1 class="text-2xl mb-4 grow">Unggah Produk</h1>      
                <button onclick="toggleSidebar('tambahProduk')" class="p-2 rounded-lg rotate-45"><span class="material-icons">add</span></button>
            </div>


            <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

                <label for="image" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Gambar Produk:</label>
                <input type="file" name="image" id="image" accept="image/*" class="mb-4" required>

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Unggah</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
