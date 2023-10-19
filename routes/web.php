<?php

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
    return view('landingPage');
});

Route::get('/login', function () {
    return view('client.login');
});

Route::get('/register', function () {
    return view('client.register');
});

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