<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\UserController;
use App\http\controllers\AdminController;
use App\http\controllers\PeminjamanController;
use App\http\controllers\BukuController;



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

// Route::get('/',[UserController::class, 'index'])->name('index');
Route::get('/',[UserController::class, 'login'])->name('login');
Route::post('/register',[UserController::class, 'registerPeminjam'])->name('registerPeminjam');
Route::post('/login/auth',[UserController::class,'auth'])->name('login.auth');

// peminjam
Route::get('/landing',[PeminjamanController::class, 'landing'])->name('landing');

//admin
Route::get('/dashboard',[BukuController::class, 'dashboard'])->name('dashboard');
Route::post('/daftarbuku',[BukuController::class, 'daftarbuku'])->name('daftarbuku');





