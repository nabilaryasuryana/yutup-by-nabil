<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', 'Aplikasi Dashboard Nabil')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
    </head>
    <body class="bg-home">
        <nav class="h-12 lg:h-12 bg-white w-screen shadow-md flex items-center itim fixed">
            <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation" class="flex items-center">
                <img src="{{ asset('images/logo.png')}}" alt="" class="icon h-8 w-8 ml-2">
                <h1 class="title text-2xl text-center ml-2">Aplikasi Dashboard Nabil</h1>
            </button>
            <!-- <div class="h-8 mt-2 ml-auto">
                @auth
                    <button class="h-8 w-8 me-2" type="button" id="menubtn"><img src="{{ asset('images/logo.png')}}"></button>
                @else
                    <a href="/Login" class="px-2 py-1 text-blue-700 rounded border border-blue-700 me-2">Login</a>
                @endauth
            </div>            
        </nav>
        
        <div id="menucontainer" class="w-screen h-screen right-0 top-0 hidden lg:hidden lg:w-2/6 lg:h-1/2 p-4 bg-white lg:border lg:border-black lg:rounded absolute lg:right-5 lg:top-5">
            <div class="menu-content flex flex-col justify-center items-center relative">
                <button class="w-5 h-5 flex justify-end absolute top-0 right-0" id="menuclose"><i class="fas fa-times"></i></button>
                <div class="align-center justify-center">
                    <img src="{{ asset('images/logo.png')}}" class="w-16 h-16 align-middle">
                    <h2 class="align-middle text-center font-semibold itim">@auth {{ auth()->user()->name }} @endauth</h2>
                </div> 
                @auth
                    <div class="container">
                        <a href="/Dashboard" class="justify-center p-2 mb-2 ms-5 mt-5 rounded-3xl border bg-blue-600 mx-auto self-center text-white itim  hover:border-blue-300 hover:bg-blue-700 border-gray-500">Dashboard</a>
                        <form action="/Logout" method="post">
                            @csrf
                            <button type="submit" class="justify-center p-2 mb-2 ms-5 mt-5 rounded-3xl border bg-red-600 mx-auto self-center text-white itim  hover:border-red-300 hover:bg-red-700 border-gray-500">LOGOUT</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div> -->
        </nav>
        
        <!-- drawer component -->
        <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-0 itim overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800 w-72" tabindex="-1" aria-labelledby="drawer-navigation-label">
                <img class="w-full h-auto relative p-0 m-0 top-0 left-0" src="{{ asset('images/screen4.jpg') }}">
                <div class="fixed mt-[-125px] p-2">
                    @auth
                    <img src="{{ auth()->user()->profile_image }}" class="mb-2 object-contain w-16 h-16">
                    @endauth
                    <p class="text-white ml-0 font-bold">
                        @auth
                        {{ auth()->user()->name }}
                        @endauth
                    </p>
                    <p class="text-white ml-0 font-bold max-w-64 overflow-hidden">
                        @auth
                        Email :
                        {{ auth()->user()->email }}
                        @endauth
                    </p>
                </div>    
                
            <div class="overflow-y-auto">
                <ul class="space-y-2 font-medium p-4">
                    <li>
                        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                            <span class="material-icons rotate-45">add</span>
                        </button>
                    </li>
                    <li>
                        <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fa fa-home w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true"></i>
                            <span class="ms-6">Home</span>
                        </a>
                    </li>
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                 <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                              </svg>
                              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Dashboard</span>
                              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                              </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                              <li>
                                <a href="/Dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="material-icons w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true">
                                    query_stats
                                    </span>
                                    <span class="ms-6">Dashboard</span>
                                </a>
                              </li>
                              <li>
                                <a href="/Dashboard/Product" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="material-icons w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true">
                                    query_stats
                                    </span>
                                    <span class="ms-6">Dashboard Product</span>
                                </a>
                              </li>
                        </ul>
                     </li>
                    <li>
                        <a href="/School" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="material-icons flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true"">
                            school
                            </span>
                            <span class="flex-1 ms-6 whitespace-nowrap">K-One</span>
                        </a>
                    </li>
                    <li>
                        <a href="/RPL" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="material-icons flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true">
                            computer
                            </span>
                            <span class="flex-1 ms-6 whitespace-nowrap">RPL</span>
                        </a>
                    </li>
                    <hr class="mx-1 my-1">
                    <li>
                        @auth
                        <a href="/Profile" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="material-icons flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true">
                            emoji_emotions
                            </span>
                            <span class="flex-1 ms-6 whitespace-nowrap">Profile</span>
                        </a>
                        @endauth
                    </li>
                    <li>
                        <a href="/About" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="material-icons flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true">
                            info
                            </span>
                            <span class="flex-1 ms-6 whitespace-nowrap">About</span>
                        </a>
                    </li>
                    <hr class="mx-1 my-1">
                    <li>
                        
                        @auth
                        <a class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="material-icons flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true">
                            meeting_room
                            </span>
                            <form action="/Logout" method="post">
                                @csrf
                                <button type="submit" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">Logout</button>
                            </form>
                        </a>
                        @else
                        <a href="/Login" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <span class="material-icons flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true">
                            door_front
                            </span>
                            <span class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">Login</span>
                        </a>
                        @endauth
                        
                    </li>
                </ul>
                </div>
            </div>
            

        <ol class="inline-flex items-center mt-14 bg-white bg-opacity-60 ms-5 px-3 py-1 rounded-sm space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            Home
            </a>
        </li>
        @yield('breadscrumb')
        </ol>
  
        
        <div class="fixed ms-0 p-4 mt-0 w-full h-full overflow-y-hidden">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    </body>
</html>
