<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManajemenKaryawanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/manajemen-karyawan', [ManajemenKaryawanController::class, 'index']);
    Route::get('/manajemen-karyawan/create', [ManajemenKaryawanController::class, 'create']);

    Route::get('/bagian', [BagianController::class, 'index']);
    Route::get('/bagian/create', [BagianController::class, 'create']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
