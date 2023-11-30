<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register To Yutup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="bg-login">
        <div class="h-2/3 w-1/3 rounded p-2 mt-2 itim align-middle justify-center bg-white border border-blue-500 focus:shadow-lg grid focus:shadow-blue-400 m-auto">
            <img src="{{ asset('images/logo.png')}}" alt="" class="lg:w-24 md:w-24 justify-center self-center mx-auto sm:w-20 w-20">
            <p class="text-center my-3 font-extrabold text-2xl">Register To Yutup</p>
            <form action="/Register" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mx-">
                    <div class="row">
                        <input type="text" required name="name" placeholder="Name ..."  class="border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700 @error('name') invalid:border-red-700 @enderror" value="">
                    </div>
                    <div class="row">
                        <select required class="@error('JK') invalid:border-red-700 @enderror border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700" name="JK" id="">
                            <option class="text-gray-400" disabled selected>Jenis Kelamin ...</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="row">
                        <select required class="@error('jurusan') invalid:border-red-700 @enderror border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700" name="jurusan" id="">
                            <option class="text-gray-400" disabled selected>Pilih Jurusan ...</option>
                            <option value="Teknik Kendaraan Ringan">TKR</option>
                            <option value="Teknik Komputer dan Jaringan">TKJ</option>
                            <option value="Rekayasa Perangkat Lunak">RPL</option>
                            <option value="Otomatisasi Tata Kelola Perkantoran">OTKP</option>
                            <option value="Akutansi Keuangan Lembaga">AKL</option>
                            <option value="Desain Pemodelan dan Informasi Bangunan">DPIB</option>
                            <option value="Seni Karawitan">SK</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="image-container" class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF.</p>
                                </div>
                                <input id="dropzone-file" type="file" name="profile_image" accept="image/*" class="hidden" />
                            </label>
                        </div> 
                    </div>
                    <div class="row">
                        <input type="text" name="username" placeholder="Username ..." class="@error('username') invalid:border-red-700 @enderror border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700" required>
                    </div>
                    <div class="row">
                        <input type="email" name="email" placeholder="Email ..." class="@error('email') invalid:border-red-700 @enderror border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700" required>
                    </div>
                    <div class="row">
                        <input type="password" name="password" placeholder="Password ..." class="@error('password') invalid:border-red-700 @enderror border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700" required>
                    </div>
                    <div class="row">
                        <input type="password" name="repassword" placeholder="Repassword ..." class="border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700" required>
                    </div>
                    <div class="row items-center content-center justify-center">
                        <input type="submit" name="submit" value="Submit" class="justify-center p-2 mb-2 rounded-3xl border bg-blue-600 mx-auto self-center text-white itim  hover:border-blue-600 focus:border-blue-700 border-gray-500 ">
                        <input type="reset" name="clear" value="Clear" class="justify-center p-2 mb-2 rounded-3xl border bg-blue-600 mx-auto self-center text-white itim  hover:border-blue-600 focus:border-blue-700 border-gray-500 ">
                    </div>
                    <div class="row">
                        <p class="itim mb-3">Already have an account? <a class="text-blue-700 underline" href="/Login">Login!</a></p>
                    </div>
                </div>
            </form>
        </div>
        @if(session()->has('success'))
            <script>
                alert("{{ session('success')}}")
            </script>
        @endif
        @if(session()->has('error'))
            <script>
                alert("{{ session('error')}}")
            </script>
        @endif
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="{{ asset('js/app.js') }}" async defer></script>
        <script>
            $(document).ready(function() {
                // Menangani perubahan pada input file
                $("#dropzone-file").change(function() {
                    previewImage(this);
                });
            });
    
            function previewImage(input) {
                // Menghapus isi di dalam elemen dengan ID image-container
                $("#image-container").empty();
    
                // Memeriksa apakah input memiliki file yang dipilih
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
    
                    reader.onload = function(e) {
                        // Buat elemen <img> baru
                        var imgElement = $("<img>")
                            .attr("src", e.target.result)
                            .attr("alt", "Image Preview")
                            .addClass("max-h-24");
    
                        // Tambahkan elemen <img> ke dalam elemen dengan ID image-container
                        $("#image-container").append(imgElement);
                    };
    
                    // Membaca data gambar sebagai URL data
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </body>
</html>