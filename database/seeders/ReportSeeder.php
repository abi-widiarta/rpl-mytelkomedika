<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        $rand = [24, 20, 28, 19, 27, 23, 22, 29, 21, 25, 30, 26, 18, 20, 29, 27, 19, 23];
        $sum = array_sum($rand);


        for ($i = 1; $i <= $sum; $i++) {
            Report::create([
                'reservation_id' => $i,
                'berat_badan' => 72,
                'tinggi_badan' => 170,
                'suhu_badan' => 38,
                'keluhan' => 'sakit kepala, pusing, meriang',
                'diagnosa' => 'demam, migrain',
                'anjuran' => 'kurangi gorengan, istirahat cukup, banyak minum air',
                'obat' => "paracetamol - 3x sehari\nvitamin - 2x sehari",
                'surat_dokter' => 1,
            ]);
        }

        for ($i = 1; $i <= $sum; $i++) {
            Payment::create([
                'reservation_id' => $i,
                'nominal' => '50000',
                'status' => 0
            ]);
        }

        // Dokter 2

        // $reportsDataDokter1 = [
        //     [
        //         'reservation_id' => 11,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 12,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 13,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 14,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 15,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 16,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 17,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 18,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 19,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        //     [
        //         'reservation_id' => 20,
        //         'berat_badan' => 72,
        //         'tinggi_badan' => 170,
        //         'suhu_badan' => 38,
        //         'keluhan' => 'sakit kepala, pusing ,meriang',
        //         'diagnosa' => 'demam, migrain',
        //         'anjuran' => 'kurangi gorenngan, istirahat cukup, banyak minum air',
        //         'obat' => 
        //         'paracetamol - 3x sehari
        //         vitamin - 2x sehari',
        //         'surat_dokter' => 1,

        //         'nominal' => '50000',
        //         'status' => 0
        //     ],
        // ];

        // foreach ($reportsDataDokter1 as $data) {
        //     Report::create([
        //         'reservation_id' => $data['reservation_id'],
        //         'berat_badan' => $data['berat_badan'],
        //         'tinggi_badan' => $data['tinggi_badan'],
        //         'suhu_badan' =>  $data['suhu_badan'],
        //         'keluhan' => $data['keluhan'],
        //         'diagnosa' => $data['diagnosa'],
        //         'anjuran' => $data['anjuran'],
        //         'obat' => $data['obat'], 
        //         'surat_dokter' => $data['surat_dokter'],
        //     ]);

        //     Payment::create([
        //         'reservation_id' => $data['reservation_id'],
        //         'nominal' => $data['nominal'],
        //         'status' => $data['status']
        //     ]);
        // }
    }
}
