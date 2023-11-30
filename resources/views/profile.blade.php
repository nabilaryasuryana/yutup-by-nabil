@extends('layouts.main')

@section('title', 'Profile || ' . auth()->user()->name)

@section('breadscrumb')
    <li aria-current="page">
        <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="/Profile"></a><span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Profile</span>
        </div>
    </li>
@endsection

@section('content')
<div class="flex justify-center items-center h-screen overflow-hidden itim">
    <div class="bg-white p-8 mt-[-200px] rounded-lg shadow-md">
        <div class="flex justify-center">
           @auth 
           <img src="{{ auth()->user()->profile_image }}" alt="Profile Image" class="rounded-full w-32 h-32 object-cover">
           @endauth
        </div>
        <div class="mt-4 w-full">
            @auth
                <h1 class="text-2xl font-bold text-center">{{ auth()->user()->name }}</h1>
                <p class="text-gray-600">Jenis Kelamin: {{ auth()->user()->JK }}</p>
                <p class="text-gray-600">Jurusan: {{ auth()->user()->jurusan }}</p>
            @endauth
        </div>
    </div>
</div>
@endsection