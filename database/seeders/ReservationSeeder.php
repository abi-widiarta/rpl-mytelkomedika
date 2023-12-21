<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dokter 1

        $rand = [24, 20, 28, 19, 27, 23, 22, 29, 21, 25, 30, 26, 18, 20, 29, 27, 19, 23];

        for ($i=1; $i <= 18 ; $i++) { 
            for ($j = 1; $j <= $rand[$i - 1]; $j++) {
                Reservation::create([
                    'patient_id' => $j,
                    'doctor_id' => $i,
                    'tanggal' => '2023-12-22',
                    'jam_mulai' => '07:00:00',
                    'jam_selesai' => '09:00:00',
                    'status' => 'completed',
                    'keluhan_awal' => 'sakit kepala, pusing, meriang',
                    'nomor_antrian' => $j,
                ]);
            }
        }


        //  // Dokter 2
        //  for ($i = 1; $i <= 10; $i++) {
        //     Reservation::create([
        //         'patient_id' => $i,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing, meriang',
        //         'nomor_antrian' => $i,
        //     ]);
        // }

        // // Dokter 3
        // for ($i = 1; $i <= 10; $i++) {
        //     Reservation::create([
        //         'patient_id' => $i,
        //         'doctor_id' => 3,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing, meriang',
        //         'nomor_antrian' => $i,
        //     ]);
        // }

        // // Dokter 4
        // for ($i = 1; $i <= 10; $i++) {
        //     Reservation::create([
        //         'patient_id' => $i,
        //         'doctor_id' => 4,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing, meriang',
        //         'nomor_antrian' => $i,
        //     ]);
        // }

        // // Dokter 5
        // for ($i = 1; $i <= 10; $i++) {
        //     Reservation::create([
        //         'patient_id' => $i,
        //         'doctor_id' => 5,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing, meriang',
        //         'nomor_antrian' => $i,
        //     ]);
        // }

        

        // // Dokter 3

        // $reservationsDataDokter2 = [
        //     [
        //         'patient_id' => 1,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 1,
        //     ],
        //     [
        //         'patient_id' => 2,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 2,
        //     ],
        //     [
        //         'patient_id' => 3,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 3,
        //     ],
        //     [
        //         'patient_id' => 4,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 4,
        //     ],
        //     [
        //         'patient_id' => 5,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 5,
        //     ],
        //     [
        //         'patient_id' => 6,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 6,
        //     ],
        //     [
        //         'patient_id' => 7,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 7,
        //     ],
        //     [
        //         'patient_id' => 8,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 8,
        //     ],
        //     [
        //         'patient_id' => 9,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 9,
        //     ],
        //     [
        //         'patient_id' => 10,
        //         'doctor_id' => 2,
        //         'tanggal' => '2023-12-22',
        //         'jam_mulai' => '07:00:00',
        //         'jam_selesai' => '09:00:00',
        //         'status' => 'completed',
        //         'keluhan_awal' => 'sakit kepala, pusing ,meriang',
        //         'nomor_antrian' => 10,
        //     ],
        // ];

        // foreach ($reservationsDataDokter2 as $data) {
        //     Reservation::create([
        //         'patient_id' =>  $data['patient_id'],
        //         'doctor_id' =>  $data['doctor_id'],
        //         'tanggal' =>  $data['tanggal'],
        //         'jam_mulai' =>  $data['jam_mulai'],
        //         'jam_selesai' =>  $data['jam_selesai'],
        //         'status' =>  $data['status'],
        //         'keluhan_awal' =>  $data['keluhan_awal'],
        //         'nomor_antrian' =>  $data['nomor_antrian'],
        //     ]);
        // }
    }
}
