<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Payment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function store(Request $request,$id) {
        
        $biaya = $request->biaya;
        $status = 0;
        
        if($request->biaya == null || $request->biaya == '0') {
            $biaya = "0";
            $status = 1; 
        };

        Report::create([
            'reservation_id' => $id,
            'weight' => $request->berat_badan,
            'height'=> $request->tinggi_badan,
            'temperature' => $request->suhu_badan,
            'initial_complaint' => $request->keluhan,
            'diagnosis' => $request->diagnosa,
            'recommendations' => $request->anjuran,
            'medications' => $request->obat,
            'sick_note' =>  $request->surat_dokter == null ? '0' : '1' ,
        ]);

        Payment::create([
            'reservation_id' => $id,
            'amount' => $biaya,
            'status' => $status,
        ]);
        
        return redirect('/admin/antrian-pemeriksaan/hasil-pemeriksaan/' . $id)->with('success', 'Data has been added successfully!');
    }

    public function update(Request $request,$id) {

        $report = Report::where('reservation_id',$id)->first();
        $payment = Payment::where('reservation_id',$id)->first();

        $biaya = $request->biaya;
        $status = 0;
        
        if($request->biaya == null || $request->biaya == '0') {
            $biaya = "0";
            $status = 1; 
        };

        $report->update([
            'weight' => $request->berat_badan,
            'height'=> $request->tinggi_badan,
            'temperature' => $request->suhu_badan,
            'initial_complaint' => $request->keluhan,
            'diagnosis' => $request->diagnosa,
            'recommendations' => $request->anjuran,
            'medications' => $request->obat,
            'sick_note' => $request->surat_dokter == null ? '0' : '1' ,
        ]);

        $payment->update([
            'amount' => $biaya,
            'status' => $status,
        ]);
        
        return redirect('/admin/antrian-pemeriksaan/hasil-pemeriksaan/' . $id)->with('success', 'Data has been updated successfully!');
    }
}
