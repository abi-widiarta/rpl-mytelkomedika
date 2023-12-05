<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

// GUEST

// Route::middleware('guest')->group(function () { 
    
// });

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/login', function () {
    return view('client.login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/contact', function () {
    return "contact page";
});

Route::get('/register', function () {
    return view('client.register');
});

Route::post('/register/profiling', [RegisterController::class, 'storeComplete']);

Route::post('/register', [RegisterController::class, 'store']);


// PASIEN
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('client.dashboard');
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

    Route::get('/riwayat-pemeriksaan/detail', function () {
        return view('client.riwayatPemeriksaanDetail');
    });
    
    Route::post('/logout', [LoginController::class, 'logout']);
});

// ADMIN
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/data-pasien',[PatientController::class, 'index']); 

Route::get('/admin/data-pasien/create',[PatientController::class, 'create']); 

Route::post('/admin/data-pasien/store',[PatientController::class, 'store']); 

Route::post('/admin/delete-pasien', [PatientController::class, 'destroy']);

Route::get('/admin/data-pasien/{username}/edit', [PatientController::class, 'edit']);

Route::post('/admin/data-pasien/{id}/update', [PatientController::class, 'update']);

Route::get('/admin/data-dokter',function() {
    return view('admin.dataDokter');
});

Route::get('/admin/data-dokter/create',[DoctorController::class, 'create']);

Route::post('/admin/data-dokter/store',[DoctorController::class, 'store']);

Route::get('/admin/data-dokter/{id}/edit',[DoctorController::class, 'edit']);

Route::post('/admin/data-dokter/{id}/update', [DoctorController::class, 'update']);

Route::post('/admin/delete-dokter', [DoctorController::class, 'destroy']);

Route::get('/admin/jadwal-dokter', function () {
    return view('admin.jadwalDokter');
});

Route::get('/admin/antrian-pemeriksaan', function () {
    return view('admin.antrianPemeriksaan');
});

Route::get('/admin/pembayaran', function () {
    return view('admin.pembayaran');
});

// Email verification

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    return("profile");
})->middleware(['auth', 'verified']);

Route::get('/riwayat-pemeriksaan/detail', function () {
    return view('client.riwayatPemeriksaanDetail');
});


// Route::get('/admin/-jadwal-dokter', [JadwalDokterController::class, 'index']);

// Route::get('/admin/-jadwal-dokter/{id}/edit', [JadwalDokterController::class, 'edit']);

// Route::post('/admin/-jadwal-dokter/{id}/update', [JadwalDokterController::class, 'update']);

