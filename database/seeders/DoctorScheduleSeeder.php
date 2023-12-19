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
        DoctorSchedule::create([
            "doctor_id" => 1,
            "schedule_time_id" => 1,
            "hari" => "senin",
            "kapasitas_pasien" => 30,
            "tanggal_berlaku_sampai" => "2024-01-01",
        ]);

        DoctorSchedule::create([
            "doctor_id" => 1,
            "schedule_time_id" => 2,
            "hari" => "senin",
            "kapasitas_pasien" => 30,
            "tanggal_berlaku_sampai" => "2024-01-01",
        ]);

        DoctorSchedule::create([
            "doctor_id" => 1,
            "schedule_time_id" => 2,
            "hari" => "selasa",
            "kapasitas_pasien" => 30,
            "tanggal_berlaku_sampai" => "2024-01-01",
        ]);
    }
}
