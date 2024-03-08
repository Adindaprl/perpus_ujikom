<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\UserController;
use App\http\controllers\PeminjamanController;


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

Route::get('/',[UserController::class, 'index'])->name('index');
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/register',[UserController::class, 'registerPeminjam'])->name('registerPeminjam');
Route::post('/login/auth',[UserController::class,'auth'])->name('login.auth');

// peminjam
Route::get('/landing',[PeminjamanController::class, 'landing'])->name('landing');




