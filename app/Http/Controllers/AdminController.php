<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Review;
use App\Models\Patient;
use App\Models\Payment;
use App\Charts\DoctorChart;
use App\Charts\ReviewChart;
use App\Models\Reservation;
use App\Models\ScheduleTime;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(DoctorChart $doctor_chart, ReviewChart $review_chart, Request $request) {
        $total_pasien = Patient::count();
        $total_dokter = Doctor::count();
        $total_pembayaran = Payment::where('nominal','!=',0)->count();
        
        return view('admin.dashboard', 
        [
            "doctor_chart" => $doctor_chart->build(),
            "review_chart" => $review_chart->build(),
            "total_pasien" => $total_pasien,
            "total_dokter" => $total_dokter,
            "total_pembayaran" => $total_pembayaran
        ]);
    }
}
