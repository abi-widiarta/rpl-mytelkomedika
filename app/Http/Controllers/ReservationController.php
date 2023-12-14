<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $schedule = DoctorSchedule::where('jam_mulai',$request->jam_mulai)->where('hari',$request->hari)->first()  ;
        $tanggal = date('Y-m-d', strtotime($request->tanggal_reservasi));

        $nextQueueNumber = $this->calculateNextQueueNumber($id, $tanggal);

        if(Reservation::where('jam',$request->jam_mulai)->where('tanggal',$tanggal)->where('patient_id',Auth::user()->id)->first()) {
            return redirect('/lakukan-reservasi')->with('error','You already book this!');
        }

        if($nextQueueNumber == 21) {
            return redirect('/lakukan-reservasi')->with('error','Quota Full!');
        }

        $user = Patient::find(Auth::user()->id);
        $user->doctors()->attach($id,['tanggal' => $tanggal,'jam' => $request->jam_mulai,'status' => 'approved', 'nomor_antrian' => $nextQueueNumber]);

        return redirect('/lakukan-reservasi')->withToastSuccess('Reservation Sent Successfully!');
    }

    // Logika untuk menghitung nomor antrian secara manual
    private function calculateNextQueueNumber($doctorId, $tanggal)
    {
        // dd($doctorId, $tanggal);
        
        $lastReservation = Reservation::where('doctor_id', $doctorId)
        ->where('tanggal', $tanggal)
        ->where('status','!=','canceled')
        ->orderBy('nomor_antrian', 'desc')
        ->first();
        

        $nextQueueNumber = $lastReservation ? $lastReservation->nomor_antrian + 1 : 1;

        return $nextQueueNumber;
    }

    public function cancel(Request $request, $reservationId) {
        $reservation = Reservation::find($reservationId);

        // Pastikan reservasi ditemukan
        if (!$reservation) {
            // Handle jika reservasi tidak ditemukan (misalnya, tampilkan pesan error)
            return redirect()->back()->with('error', 'Reservasi tidak ditemukan.');
        }

        // Pastikan pasien yang ingin membatalkan reservasi adalah pemiliknya
        if ($reservation->patient_id != auth()->user()->id) {
            // Handle jika pasien bukan pemilik reservasi (misalnya, tampilkan pesan error)
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk membatalkan reservasi ini.');
        }

        // Simpan nomor antrian yang akan dihapus
        $canceledQueueNumber = $reservation->nomor_antrian;

        // Batalkan reservasi
        $reservation->update(['status' => 'canceled']);

        // Hapus nomor antrian yang dibatalkan
        Reservation::where('doctor_id', $reservation->doctor_id)
            ->where('tanggal', $reservation->tanggal)
            ->where('nomor_antrian', '>', $canceledQueueNumber)
            ->decrement('nomor_antrian');

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Reservasi berhasil dibatalkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
