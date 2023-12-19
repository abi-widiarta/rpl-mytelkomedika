<?php

namespace Database\Seeders;

use App\Models\ScheduleTime;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScheduleTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ScheduleTime::create([
            "jam_mulai" => "07:00:00",
            "jam_selesai" => "09:00:00",
        ]);
        ScheduleTime::create([
            "jam_mulai" => "10:00:00",
            "jam_selesai" => "12:00:00",
        ]);
        ScheduleTime::create([
            "jam_mulai" => "13:00:00",
            "jam_selesai" => "15:00:00",
        ]);
        ScheduleTime::create([
            "jam_mulai" => "16:00:00",
            "jam_selesai" => "18:00:00",
        ]);
        ScheduleTime::create([
            "jam_mulai" => "19:00:00",
            "jam_selesai" => "21:00:00",
        ]);
        
    }
}
