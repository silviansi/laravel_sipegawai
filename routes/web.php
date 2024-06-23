<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ManajemenKaryawanController;
use App\Http\Controllers\ManajemenPegawaiController;
use App\Http\Controllers\StatusController;
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
    return view('auth.login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    // Route untuk dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route untuk manajemen karyawan
    Route::get('/manajemen-pegawai', [ManajemenPegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/manajemen-pegawai/create', [ManajemenPegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/manajemen-pegawai/store', [ManajemenPegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('/manajemen-pegawai/detail', [ManajemenPegawaiController::class, 'detail'])->name('pegawai.detail');
    Route::get('/manajemen-pegawai/{id}/edit', [ManajemenPegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('/manajemen-pegawai/{id}', [ManajemenPegawaiController::class, 'update'])->name('pegawai.update');
    Route::delete('/manajemen-pegawai/{id}', [ManajemenPegawaiController::class, 'destroy'])->name('pegawai.destroy');

    // Route untuk bagian
    Route::get('/bagian', [BagianController::class, 'index'])->name('bagian.index');
    Route::get('/bagian/create', [BagianController::class, 'create']);
    Route::post('/bagian/store', [BagianController::class, 'store'])->name('bagian.store');
    Route::get('/bagian/{id}/edit', [BagianController::class, 'edit'])->name('bagian.edit');
    Route::put('/bagian/{id}', [BagianController::class, 'update'])->name('bagian.update');
    Route::delete('/bagian/{id}', [BagianController::class, 'destroy'])->name('bagian.destroy');

    // Route untuk jabatan
    Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
    Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::get('/jabatan/{id}/edit', [JabatanController::class, 'edit'])->name('jabatan.edit');
    Route::put('/jabatan/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::delete('/jabatan/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');

    // Route untuk status
    Route::get('/status', [StatusController::class, 'index'])->name('status.index');
    Route::get('/status/create', [StatusController::class, 'create']);
    Route::post('/status/store', [StatusController::class, 'store'])->name('status.store');
    Route::get('/status/{id}/edit', [StatusController::class, 'edit'])->name('status.edit');
    Route::put('/status/{id}', [StatusController::class, 'update'])->name('status.update');
    Route::delete('/status/{id}', [StatusController::class, 'destroy'])->name('status.destroy');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
