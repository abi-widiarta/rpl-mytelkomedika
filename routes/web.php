<?php

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Report;
use App\Models\Patient;
use App\Models\Reservation;
use App\Models\ScheduleTime;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Models\Payment;
use App\Models\Review;
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

        $reservations = Reservation::where('patient_id', Auth::user()->id)->where('status', '!=', 'canceled');
    
        $daftar_reservasi = $reservations->get();

        return view('client.dashboard', ['daftar_reservasi' => $daftar_reservasi]);
    });

    Route::get('/lakukan-reservasi', [DoctorController::class, 'indexClient']);

    Route::post('/lakukan-reservasi', function (Request $request) {
        dd($request);
    });
    
    Route::get('/reservasi-saya', function (Request $request) {
        $reservations = Reservation::where('patient_id', Auth::user()->id)
            ->where('status','approved');
    
        $reservations->when($request->poli, function ($query) use ($request) {
            $query->whereHas('doctor', function ($subquery) use ($request) {
                $subquery->where('spesialisasi', $request->poli);
            });
        });
    
        $daftar_reservasi = $reservations->get();
    
        return view('client.reservasiSaya', ['daftar_reservasi' => $daftar_reservasi]);
    });
    
    Route::get('/riwayat-pemeriksaan', function () {

        $daftar_pemeriksaan = Reservation::with('doctor')->where('patient_id', Auth::user()->id)->where('status','completed')->get();

        return view('client.riwayatPemeriksaan',['daftar_pemeriksaan'=>$daftar_pemeriksaan ]);
    });

    Route::get('/riwayat-pemeriksaan/detail/{id}', function ($id) {
        $report = Report::with('reservation')->where('reservation_id',$id)->first();

        // Pisahkan input menjadi baris-baris
        $lines = explode("\n", $report->obat);

        // Inisialisasi dua array
        $array1 = [];
        $array2 = [];

        // Proses setiap baris
        foreach ($lines as $line) {
            // Pisahkan setiap baris menjadi array berdasarkan tanda "-"
            $parts = explode(" - ", $line);

            // Tambahkan ke array yang sesuai
            $array1[] = $parts[0];
            $array2[] = $parts[1];
        }

        return view('client.riwayatPemeriksaanDetail', ["report" => $report, "daftar_obat" => $array1,"dosis_obat" => $array2]);
    });

    Route::get('/riwayat-pemeriksaan/detail/pdf/{id}', function ($id) {
        $report = Report::with('reservation')->where('reservation_id',$id)->first();
        

        $obatList = explode("\n", $report->obat);
        
        // $pdf = App::make('dompdf.wrapper');

        $pdf = Pdf::loadView('client.riwayatPemeriksaanDetailPDF',["report" => $report, "daftar_obat" => $obatList]);
        return $pdf->stream('TelkoMedika_Hasil Pemeriksaan_' . $report->reservation->patient->nim . '.pdf');
        // return $pdf->download('invoice.pdf');

        return view('client.riwayatPemeriksaanDetailPDF', ["report" => $report, "daftar_obat" => $obatList]);
    });

    Route::post('/lakukan-reservasi/detail/{id}',  [ReservationController::class, 'store']);
    
    Route::post('/reservasi-saya/cancel/{id}',  [ReservationController::class, 'cancel']);

    Route::post('/logout', [LoginController::class, 'logout']);

    Route::post('/riwayat-pemeriksaan/detail/review/{id}', function (Request $request,$id) {
        Review::create([
            'doctor_id' => $request->doctor_id,
            'report_id'=> $id,
            'comment'=> $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->back()->with('success', 'Review berhasil dikirim.');

    });
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
        $schedules =  DoctorSchedule::with('doctor')->get();

        // dd($doctor);
        // $schedules = DoctorSchedule::with('doctor')->get();

        // // Menggunakan fungsi sortBy untuk mengurutkan berdasarkan 'doctor.username' dan 'hari'
        // $sortedSchedules = $schedules->sortBy([
        //     'doctor.username',
        //     'hari',
        // ]);

        // // Mengelompokkan jadwal berdasarkan 'doctor.username'
        // $groupedSchedulesByUsername = $sortedSchedules->groupBy('doctor.username');

        // // Menggabungkan grup-grup menjadi satu koleksi dengan pengurutan tambahan berdasarkan 'hari'
        // $finalSchedules = collect();
        // $daysOrder = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];
        // foreach ($groupedSchedulesByUsername as $usernameGroup) {
        //     $groupedSchedulesByDay = $usernameGroup->groupBy('hari');
        //     foreach ($daysOrder as $day) {
        //         if (isset($groupedSchedulesByDay[$day])) {
        //             $finalSchedules = $finalSchedules->merge($groupedSchedulesByDay[$day]);
        //         }
        //     }
        // }

        return view('admin.jadwalDokter', ["schedules" => $schedules]);
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
    
    Route::get('/admin/antrian-pemeriksaan', function (Request $request) {
        $reservation = Reservation::with('doctor') // Pastikan telah mendefinisikan relasi dengan model Doctor
        ->when($request->tanggal_reservasi, function ($query) use ($request) {
            $originalDate = $request->tanggal_reservasi;

            // Membuat objek Carbon dari string tanggal awal
            $carbonDate = Carbon::createFromFormat('m/d/Y', $originalDate);

            // Mengubah format tanggal
            $formattedDate = $carbonDate->format('Y-m-d');
            
            // dd($formattedDate);
            $query->where('tanggal',$formattedDate);
        })
        ->when($request->poli, function ($query) use ($request) {
            $query->whereHas('doctor', function ($subquery) use ($request) {
                $subquery->where('spesialisasi', $request->poli);
            });
        })
        ->when($request->jam_mulai, function ($query) use ($request) {
            $query->where('jam_mulai',$request->jam_mulai);
        })
        ->where('status', '!=', 'canceled') 
        ->get();


        return view('admin.antrianPemeriksaan',["daftar_jam" => ScheduleTime::all(),"reservations" => $reservation]);
    });

    Route::post('/admin/antrian-pemeriksaan/complete/{id}', function ($id) {
        $reservation = Reservation::findOrFail($id);
        $reservation->update([
            "status" => 'completed',

        ]);

        return redirect()->back()->with('success', 'Reservasi berhasil dibatalkan.');

    });

    Route::get('/admin/antrian-pemeriksaan/hasil-pemeriksaan/{id}', function ($id) {
        if(Report::where('reservation_id',$id)->first() != null) {
            // dd("teds");
            return view('admin.formHasilPemeriksaanEdit',["report" => Report::where('reservation_id',$id)->first()]);
        } else {
            return view('admin.formHasilPemeriksaan',["reservation" => Reservation::with(['patient','doctor'])->findOrFail($id)]);
        }
    });

    Route::post('/admin/antrian-pemeriksaan/hasil-pemeriksaan/{id}', function (Request $request,$id) {
        
        $biaya = $request->biaya;
        $status = 0;
        
        if($request->biaya == null || $request->biaya == '0') {
            $biaya = "0";
            $status = 1; 
        };

        // dd($request->surat_dokter);
        Report::create([
            'reservation_id' => $id,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan'=> $request->tinggi_badan,
            'suhu_badan' => $request->suhu_badan,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'anjuran' => $request->anjuran,
            'obat' => $request->obat,
            'surat_dokter' => $request->surat_dokter,
        ]);

        Payment::create([
            'reservation_id' => $id,
            'nominal' => $biaya,
            'status' => $status,
        ]);
        
        return redirect('/admin/antrian-pemeriksaan/hasil-pemeriksaan/' . $id)->with('success', 'Data has been added successfully!');
    });

    Route::post('/admin/antrian-pemeriksaan/hasil-pemeriksaan/update/{id}', function (Request $request,$id) {

        $report = Report::where('reservation_id',$id)->first();
        $payment = Payment::where('reservation_id',$id)->first();

        $biaya = $request->biaya;
        $status = 0;
        
        if($request->biaya == null || $request->biaya == '0') {
            $biaya = "0";
            $status = 1; 
        };

        $report->update([
            'berat_badan' => $request->berat_badan,
            'tinggi_badan'=> $request->tinggi_badan,
            'suhu_badan' => $request->suhu_badan,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'anjuran' => $request->anjuran,
            'obat' => $request->obat,
            'surat_dokter' => $request->surat_dokter == null ? '0' : '1' ,
        ]);

        $payment->update([
            'nominal' => $biaya,
            'status' => $status,
        ]);
        
        return redirect('/admin/antrian-pemeriksaan/hasil-pemeriksaan/' . $id)->with('success', 'Data has been updated successfully!');
    });
    
    Route::get('/admin/pembayaran', function () {

        // dd(Payment::where('nominal','!=','0')->get());
        return view('admin.pembayaran',['payments' => Payment::where('nominal','!=','0')->get()]);
    });

    Route::post('/admin/pembayaran/complete/{id}', function ($id) {
        $payment = Payment::find($id);
        $payment->update([
            'status' => 1,
        ]);

        return redirect()->back()->with('success', 'Pembayaran berhasil dikonfirmasi!');
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

    $reviews = Review::with(['doctor','report'])->where('doctor_id',$doctor->id)->get();
    return view('client.lakukanReservasiDetail',["doctor" => $doctor, "schedules" => DoctorSchedule::where('doctor_id',$doctor->id)->get(),"reviews" =>$reviews ]);
});


// Route::get('/admin/-jadwal-dokter', [JadwalDokterController::class, 'index']);

// Route::get('/admin/-jadwal-dokter/{id}/edit', [JadwalDokterController::class, 'edit']);

// Route::post('/admin/-jadwal-dokter/{id}/update', [JadwalDokterController::class, 'update']);

