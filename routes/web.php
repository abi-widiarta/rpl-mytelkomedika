<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('landingPage');
});

Route::get('/login', function () {
    return view('client.login');
});

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/contact', function () {
    return "contact page";
});


Route::get('/register', function () {
    return view('client.register');
});

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/data-pasien', function () {
    return view('admin.dataPasien');
});

Route::get('/data-dokter', function () {
    return view('admin.dataDokter');
});

Route::get('/jadwal-dokter', function () {
    return view('admin.jadwalDokter');
});

Route::get('/antrian-pemeriksaan', function () {
    return view('admin.antrianPemeriksaan');
});

Route::get('/lakukan-reservasi', function () {
    return view('client.lakukanReservasi');
});

Route::get('/reservasi-saya', function () {
    return view('client.reservasiSaya');
});

Route::get('/riwayat-pemeriksaan', function () {
    return view('client.riwayatPemeriksaan');
});

Route::get('/dashboard', function () {
    return view('client.dashboard');
});