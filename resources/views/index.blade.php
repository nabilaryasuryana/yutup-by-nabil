<?php

if (isset($_SESSION['username']) === 0 || isset($_SESSION['username']) === null || isset($_SESSION['username']) == null || isset($_SESSION['username']) == 0) {
    $user = "guest";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yutup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
    </head>
    <body>
        <nav class="h-12 lg:h-12 bg-slate-300 w-screen shadow-md flex items-center itim fixed">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png')}}" alt="" class="icon h-8 w-8 ml-2">
                <h1 class="title text-2xl text-center ml-2">Yutup</h1>
            </div>
            <div class="h-8 mt-2 ml-auto">
                <?php
                if ($user !== "guest") {
                    echo '<button class="h-8 w-8 me-2" type="button" id="menubtn"><img src="' . asset('images/logo.png') . '"></button>';
                } else {
                    echo '<a href="/login" class="px-2 py-1 text-blue-700 rounded border border-blue-700 me-2">Login</a>';
                }
                ?>
            </div>            
        </nav>
        <div id="menucontainer" class="w-screen h-screen right-0 top-0 hidden lg:hidden lg:w-2/6 lg:h-1/2 p-4 bg-white lg:border lg:border-black lg:rounded absolute lg:right-5 lg:top-5">
            <div class="menu-content flex flex-col justify-center items-center relative">
                <button class="w-5 h-5 flex justify-end absolute top-0 right-0" id="menuclose"><i class="fas fa-times"></i></button>
                <div class="align-center justify-center">
                    <img src="{{ asset('images/logo.png') }}" class="w-16 h-16 align-middle">
                    <h2 class="align-middle text-center font-semibold itim"><?= $user?></h2>
                </div> 
            </div>
        </div>              
        <script src="{{ asset('js/app.js') }}" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
