<?php

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Route::middleware('guest')->group(function () {
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
    
    Route::post('/register', [RegisterController::class, 'store']);
    
    Route::get('/admin/register', function () {
        return view('admin.register');
    });

    Route::post('/admin/register', [RegisterController::class, 'storeAdmin']);
    
    
    Route::get('/admin/login', function () {
        return view('admin.login');
    });
    
    Route::post('/admin/login', [LoginController::class, 'authenticateAdmin']);
});

// PASIEN
Route::middleware(['auth','verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('client.dashboard');
    });

    Route::get('/lakukan-reservasi', function () {
        return view('client.lakukanReservasi',["doctors" => Doctor::all()]);
    });

    Route::post('/lakukan-reservasi', function (Request $request) {
        dd($request);
    });
    
    Route::get('/reservasi-saya', function () {
        $daftarReservasi = Reservation::where('patient_id',Auth::user()->id)->where('status','!=','canceled')->get();

        return view('client.reservasiSaya', ['daftar_reservasi' => $daftarReservasi]);
    });
    
    Route::get('/riwayat-pemeriksaan', function () {
        return view('client.riwayatPemeriksaan');
    });

    Route::get('/riwayat-pemeriksaan/detail', function () {
        return view('client.riwayatPemeriksaanDetail');
    });

    Route::post('/lakukan-reservasi/detail/{id}',  [ReservationController::class, 'store']);
    
    Route::post('/reservasi-saya/cancel/{id}',  [ReservationController::class, 'cancel']);

    Route::post('/logout', [LoginController::class, 'logout']);
});

// ADMIN
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::post('/admin/logout', [LoginController::class, 'logoutAdmin']);
    
    Route::get('/admin/data-pasien',[PatientController::class, 'index']); 
    
    Route::get('/admin/data-pasien/create',[PatientController::class, 'create']); 
    
    Route::post('/admin/data-pasien/store',[PatientController::class, 'store']); 
    
    Route::post('/admin/data-pasien/delete/{id}', [PatientController::class, 'destroy']);
    
    Route::get('/admin/data-pasien/edit/{username}', [PatientController::class, 'edit']);
    
    Route::post('/admin/data-pasien/update/{id}', [PatientController::class, 'update']);
    
    Route::get('/admin/data-dokter',[DoctorController::class, 'index']);
    
    Route::get('/admin/data-dokter/create',[DoctorController::class, 'create']);
    
    Route::post('/admin/data-dokter/store',[DoctorController::class, 'store']);
    
    Route::get('/admin/data-dokter/edit/{username}',[DoctorController::class, 'edit']);
    
    Route::post('/admin/data-dokter/update/{username}', [DoctorController::class, 'update']);
    
    Route::post('/admin/data-doctor/delete/{id}', [DoctorController::class, 'destroy']);
    
    Route::get('/admin/jadwal-dokter', function () {
        $schedules = DoctorSchedule::with('doctor')->get();

        // Menggunakan fungsi sortBy untuk mengurutkan berdasarkan 'doctor.username' dan 'hari'
        $sortedSchedules = $schedules->sortBy([
            'doctor.username',
            'hari',
        ]);

        // Mengelompokkan jadwal berdasarkan 'doctor.username'
        $groupedSchedulesByUsername = $sortedSchedules->groupBy('doctor.username');

        // Menggabungkan grup-grup menjadi satu koleksi dengan pengurutan tambahan berdasarkan 'hari'
        $finalSchedules = collect();
        $daysOrder = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];
        foreach ($groupedSchedulesByUsername as $usernameGroup) {
            $groupedSchedulesByDay = $usernameGroup->groupBy('hari');
            foreach ($daysOrder as $day) {
                if (isset($groupedSchedulesByDay[$day])) {
                    $finalSchedules = $finalSchedules->merge($groupedSchedulesByDay[$day]);
                }
            }
        }

        return view('admin.jadwalDokter', ["schedules" => $finalSchedules]);
    });

    Route::get('/admin/jadwal-dokter/create', function () {
        return view('admin.jadwalDokterTambah', ["doctors"=> Doctor::all()]);
    });

    Route::post('/admin/jadwal-dokter/store', function (Request $request) {
        DoctorSchedule::create([
            "doctor_id" => $request->dokter,
            "hari" => $request->hari,
            "jam_mulai" => date('H:i', strtotime($request->jam_mulai)),
            "jam_selesai" => date('H:i', strtotime($request->jam_selesai)),
            "tanggal_berlaku_sampai" => $request->tanggal_berlaku_sampai,
        ]);

        return redirect('/admin/jadwal-dokter')->with('success','Data added successfully!');
    });

    Route::get('/admin/jadwal-dokter/edit/{id}', function ($id) {
        return view('admin.jadwalDokterEdit', ["schedule"=> DoctorSchedule::findOrFail($id)]);
    });


    Route::post('/admin/jadwal-dokter/update/{id}', function (Request $request, $id) {
        $schedule = DoctorSchedule::findOrFail($id);

        $schedule->update(
            [   
                "doctor_id" =>$request->dokter,
                "hari" => $request->hari,
                "jam_mulai" => $request->jam_mulai,
                "jam_selesai" => $request->jam_selesai,
                "tanggal_berlaku_sampai" => $request->tanggal_berlaku_sampai,
            ]
            );

        return redirect('/admin/jadwal-dokter/edit/' . $id)->with('success','Data updated successfully!');
    });

    Route::post('/admin/jadwal-dokter/delete/{id}', function ($id) {

        DoctorSchedule::where('id', $id)->delete();

        return redirect('/admin/jadwal-dokter')->with('success', 'Data has been deleted successfully!');

    });
    
    Route::get('/admin/antrian-pemeriksaan', function () {
        return view('admin.antrianPemeriksaan');
    });
    
    Route::get('/admin/pembayaran', function () {
        return view('admin.pembayaran');
    });
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

    return back()->with('message', 'New verification has been link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', [PatientController::class, 'profileEdit'])->middleware(['auth', 'verified']);

Route::post('/profile/edit/{id}',  [PatientController::class, 'profileUpdate'])->middleware(['auth', 'verified']);

Route::get('/lakukan-reservasi/detail/{username}', function ($username) {
    $doctor = Doctor::where('username',$username)->first();
    return view('client.lakukanReservasiDetail',["doctor" => $doctor, "schedules" => $doctor->doctor_schedule]);
});


// Route::get('/admin/-jadwal-dokter', [JadwalDokterController::class, 'index']);

// Route::get('/admin/-jadwal-dokter/{id}/edit', [JadwalDokterController::class, 'edit']);

// Route::post('/admin/-jadwal-dokter/{id}/update', [JadwalDokterController::class, 'update']);

