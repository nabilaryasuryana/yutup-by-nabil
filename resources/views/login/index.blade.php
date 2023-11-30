<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login To Yutup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="bg-login">
        <form action="/Login" method="post">
            @csrf
            <div class="h-2/3 w-1/3 rounded p-2 mt-44 itim align-middle justify-center bg-white border border-blue-500 focus:shadow-lg grid focus:shadow-blue-400 m-auto">
                <img src="{{ asset('images/logo.png')}}" alt="" class="lg:w-52 md:w-32 justify-center self-center mx-auto sm:w-20 w-20">
                <p class="text-center my-3 font-extrabold text-2xl">Login To Yutup</p>
                <div class="row">
                    <input type="email" name="email" placeholder="Email ..." autofocus class="border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700 @error('email') invalid:border-red-700 @enderror" required>
                </div>
                <div class="row">
                    <input type="password" name="password" placeholder="Password ..." class="border-gray-500 w-full mb-3 p-2 rounded-3xl transition-all hover:border-blue-600 focus:border-blue-700 @error('password') invalid:border-red-700 @enderror" required>
                </div>
                <div class="row items-center content-center justify-center">
                    <input type="submit" name="submit" value="submit" class="justify-center p-2 mb-2 rounded-3xl border bg-blue-600 mx-auto self-center text-white itim  hover:border-blue-600 focus:border-blue-700 border-gray-500 ">
                </div>
                <div class="row">
                    <p class="itim mb-3">Don't have any account? <a class="text-blue-700 underline" href="/Register">Register!</a></p>
                </div>
            </div>
        </form>
        @if(session()->has('success'))
            <script>
                alert("{{ session('success')}}")
            </script>
        @endif
        @if(session()->has('LoginError'))
            <script>
                alert("{{ session('LoginError')}}")
            </script>
        @endif
        <script src="{{ asset('js/app.js') }}" async defer></script>
    </body>
</html>