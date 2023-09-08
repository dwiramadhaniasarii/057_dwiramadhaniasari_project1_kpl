<?php

use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\managerController;
use App\Http\Controllers\pegawaiController;
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

Route::get('/', [SesiController::class, 'login']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'login'])->name('login');
    Route::post('/login-proses', [SesiController::class, 'login_proses'])->name('login-proses')->middleware('throttle:login'); //
    // Route::get('/daftar', [SesiController::class, 'daftar'])->name('daftar');
    // Route::post('/daftar-proses', [SesiController::class, 'daftar_proses'])->name('daftar-proses');

});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {  
    /// admin ///
    Route::get('/admin', [AdminController::class, 'index'])->name('index')->middleware('userAkses:admin');
    /// end admin ////

    ///guru
    Route::get('/manager', [managerController::class, 'index'])->name('index')->middleware('userAkses:manager');
    ///endguru///

    /// murid ///
    Route::get('/pegawai', [pegawaiController::class, 'index'])->name('index')->middleware('userAkses:pegawai');
    /// end murid ////

    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

