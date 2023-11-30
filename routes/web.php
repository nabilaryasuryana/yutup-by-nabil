<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TambahUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);

Route::post('/Logout', [LoginController::class, 'logout']);

Route::get('/Register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);

Route::get('/TambahUser', [TambahUserController::class, 'index'])->middleware('auth');
Route::post('/TambahUser', [TambahUserController::class, 'Tambah']);

Route::get('/Dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('index');
Route::get('/Dashboard/{q}', [UserController::class, 'query'])->middleware('auth');
Route::get('/Search/{q}', [UsersController::class, 'query'])->name('search');

Route::get('/EditDisable/{id}', [EditController::class, 'FiturDisabled'])->middleware('auth')->name('editDisabled');
Route::get('/Edit/{id}', [EditController::class, 'index'])->middleware('auth')->name('editpage');
Route::post('/Edit/{id}', [EditController::class, 'edit'])->name('edit');
Route::get('/Delete/{id}', [EditController::class, 'destroy'])->name('delete');

Route::post('/upload', [ProductController::class, 'upload'])->name('upload');
