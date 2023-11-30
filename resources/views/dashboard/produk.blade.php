@extends('layouts.main')

@section('title', 'Dashboard || ' . auth()->user()->name)

@section('breadscrumb')
    <li aria-current="page">
        <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="/Dashboard"><span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Dashboard</span></a>
        </div>
    </li>
    <li aria-current="page">
        <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="/Dashboard/product"></a><span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Product</span>
        </div>
    </li>
@endsection
@section('content')
        <h2 class="text-center text-2xl mb-5 itim ms-0">
            Selamat datang {{ auth()->user()->name }} di halaman Dashboard Produk
        </h2>
        <!-- <form action="/Logout" class="" method="post">
            @csrf
            <a
                href="/TambahUser"
                class="justify-center p-2 mb-2 ms-5 mt-5 rounded-3xl border bg-green-600 mx-auto self-center text-white itim hover:border-green-600 hover:bg-green-700 border-gray-500"
                >Tambah Pengguna Baru</a
            ><br /><br />
            <a
                href="/"
                class="justify-center p-2 mb-2 ms-5 mt-5 rounded-3xl border bg-blue-600 mx-auto self-center text-white itim hover:border-blue-300 hover:bg-blue-700 border-gray-500"
                >HOME</a
            >
            <button
                type="submit"
                class="justify-center p-2 mb-2 ms-5 mt-5 rounded-3xl border bg-red-600 mx-auto self-center text-white itim hover:border-red-300 hover:bg-red-700 border-gray-500"
            >
                LOGOUT
            </button>
        </form> -->

        <form action="/Dashboard/Product/" method="get" class="grid mb-3">
            <div
                class="row-span-full justify-self-center justify-center justify-items-center"
            >
                <input
                    type="search"
                    placeholder="Search ..."
                    name="q"
                    id="query"
                    class="rounded-md border-black border-2 hover:border-blue-500 focus:border-blue-700 p-2"
                />
                <input type="submit" value="search" class="justify-center p-2 mb-2 ms-0 mt-5 rounded-md border bg-blue-600 mx-auto self-center text-white itim hover:border-blue-300 hover:bg-blue-700 border-gray-500" >
            </div>
        </form>
        @if ($data !== null)
        <div class="relative overflow-x-auto max-h-96 overflow-y-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left max-h-4 overflow-y-auto rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="max-h-4 overflow-y-auto">
                    @foreach ($data as $d)
                    <tr class="odd:bg-white itim odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p>{{ $d['i'] }}</p>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p>{{ $d['name'] }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ url($d['image']) }}" alt="" class="max-w-32 max-h-32 h-auto w-auto">
                            
                        </td>
                        <td class="px-6 py-4">
                            <a
                                href="{{ route('editpageProduk', ['id' => $d['id']]) }}"
                                class="justify-center rounded-md border p-2 bg-green-600 mx-auto self-center text-white itim hover:border-green-300 hover:bg-green-700 border-gray-500"
                                >Edit</a
                            >
                            |
                            <a
                                href="{{ route('deleteProduk', ['id' => $d['id']]) }}"
                                class="justify-center rounded-md border p-2 bg-red-600 mx-auto self-center text-white itim hover:border-red-300 hover:bg-red-700 border-gray-500"
                                >Delete</a
                            >
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @endif
        

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
        <div id="error" class="w-auto rounded-xl min-w-fit px-5 py-2 grid grid-flow-row-dense justify-center align-middle self-center mx-auto bg-opacity-90 bg-red-700">
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
        </div>
        <!-- <script>
            alert('{{ session("error")}} ');
        </script> -->
        @endif
        <script src="{{ asset('js/app.js') }}" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
        <script>


            function close(Alert) {
                const AlertContainer = document.getElementById(Alert);
                console.log('succes');
                AlertContainer.classList.add('hidden');
            }

            const keyword = document.getElementById("query");
            const container = document.getElementById("search-result");

            keyword.addEventListener("keyup", function () {
                var xhr = new XMLHttpRequest();
                if (keyword.value !== null) {
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            container.innerHTML = xhr.responseText;
                        }
                    };
                }
                const q = keyword.value;

                xhr.open("GET", "/Search/{q}", true);

                xhr.send();
            });
        </script>
@endsection
