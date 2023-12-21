<?php

namespace Database\Seeders;

use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $doctorSchedulesData =  [

            // POLI UMUM

            // Doctor 1
            [
                "doctor_id" => 1,
                "schedule_time_id" => 1,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 1,
                "schedule_time_id" => 2,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 1,
                "schedule_time_id" => 1,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 1,
                "schedule_time_id" => 2,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 1,
                "schedule_time_id" => 1,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 1,
                "schedule_time_id" => 2,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI UMUM

            // Doctor 2
            [
                "doctor_id" => 2,
                "schedule_time_id" => 4,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 2,
                "schedule_time_id" => 5,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 2,
                "schedule_time_id" => 4,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 2,
                "schedule_time_id" => 5,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 2,
                "schedule_time_id" => 4,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            
            [
                "doctor_id" => 2,
                "schedule_time_id" => 5,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI UMUM

            // Doctor 3
            [
                "doctor_id" => 3,
                "schedule_time_id" => 3,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 3,
                "schedule_time_id" => 3,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 3,
                "schedule_time_id" => 3,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI UMUM

            // Doctor 4
            [
                "doctor_id" => 4,
                "schedule_time_id" => 1,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 4,
                "schedule_time_id" => 2,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 4,
                "schedule_time_id" => 1,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 4,
                "schedule_time_id" => 2,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI UMUM

            // Doctor 5
            [
                "doctor_id" => 5,
                "schedule_time_id" => 4,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 5,
                "schedule_time_id" => 5,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 5,
                "schedule_time_id" => 4,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 5,
                "schedule_time_id" => 5,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI UMUM

            // Doctor 6
            [
                "doctor_id" => 6,
                "schedule_time_id" => 3,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 6,
                "schedule_time_id" => 3,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI MATA

            // Doctor 1
            [
                "doctor_id" => 7,
                "schedule_time_id" => 1,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 7,
                "schedule_time_id" => 2,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 7,
                "schedule_time_id" => 1,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 7,
                "schedule_time_id" => 2,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 7,
                "schedule_time_id" => 1,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 7,
                "schedule_time_id" => 2,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI MATA

            // Doctor 2
            [
                "doctor_id" => 8,
                "schedule_time_id" => 4,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 8,
                "schedule_time_id" => 5,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 8,
                "schedule_time_id" => 4,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 8,
                "schedule_time_id" => 5,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 8,
                "schedule_time_id" => 4,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            
            [
                "doctor_id" => 8,
                "schedule_time_id" => 5,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI MATA

            // Doctor 3
            [
                "doctor_id" => 9,
                "schedule_time_id" => 3,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 9,
                "schedule_time_id" => 3,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 9,
                "schedule_time_id" => 3,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI MATA

            // Doctor 4
            [
                "doctor_id" => 10,
                "schedule_time_id" => 1,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 10,
                "schedule_time_id" => 2,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 10,
                "schedule_time_id" => 1,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 10,
                "schedule_time_id" => 2,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI MATA

            // Doctor 5
            [
                "doctor_id" => 11,
                "schedule_time_id" => 4,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 11,
                "schedule_time_id" => 5,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 11,
                "schedule_time_id" => 4,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 11,
                "schedule_time_id" => 5,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI MATA

            // Doctor 6
            [
                "doctor_id" => 12,
                "schedule_time_id" => 3,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 12,
                "schedule_time_id" => 3,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI GIGI

            // Doctor 1
            [
                "doctor_id" => 13,
                "schedule_time_id" => 1,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 13,
                "schedule_time_id" => 2,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 13,
                "schedule_time_id" => 1,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 13,
                "schedule_time_id" => 2,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 13,
                "schedule_time_id" => 1,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 13,
                "schedule_time_id" => 2,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI GIGI

            // Doctor 2
            [
                "doctor_id" => 14,
                "schedule_time_id" => 4,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 14,
                "schedule_time_id" => 5,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 14,
                "schedule_time_id" => 4,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 14,
                "schedule_time_id" => 5,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 14,
                "schedule_time_id" => 4,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            
            [
                "doctor_id" => 14,
                "schedule_time_id" => 5,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI GIGI

            // Doctor 3
            [
                "doctor_id" => 15,
                "schedule_time_id" => 3,
                "hari" => "senin",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 15,
                "schedule_time_id" => 3,
                "hari" => "rabu",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 15,
                "schedule_time_id" => 3,
                "hari" => "jumat",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

            // POLI GIGI

            // Doctor 4
            [
                "doctor_id" => 16,
                "schedule_time_id" => 1,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 16,
                "schedule_time_id" => 2,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 16,
                "schedule_time_id" => 1,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 16,
                "schedule_time_id" => 2,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI GIGI

            // Doctor 5
            [
                "doctor_id" => 17,
                "schedule_time_id" => 4,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 17,
                "schedule_time_id" => 5,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            [
                "doctor_id" => 17,
                "schedule_time_id" => 4,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
      
            [
                "doctor_id" => 17,
                "schedule_time_id" => 5,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
    
            // POLI GIGI

            // Doctor 6
            [
                "doctor_id" => 18,
                "schedule_time_id" => 3,
                "hari" => "selasa",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],
            [
                "doctor_id" => 18,
                "schedule_time_id" => 3,
                "hari" => "kamis",
                "kapasitas_pasien" => 30,
                "tanggal_berlaku_sampai" => "2024-01-01",
            ],

        ];

        foreach ($doctorSchedulesData as $data) {
            DoctorSchedule::create([
                "doctor_id" => $data['doctor_id'],
                "schedule_time_id" => $data['schedule_time_id'],
                "hari" => $data['hari'],
                "kapasitas_pasien" => $data['kapasitas_pasien'],
                "tanggal_berlaku_sampai" => $data['tanggal_berlaku_sampai'],
            ]);
        }
        // Doctor GIGI
    }
}
