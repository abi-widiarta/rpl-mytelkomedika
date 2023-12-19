<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            "name" => "Dr. Stephen Strange",
            "email"=> "stephen@gmail.com",
            "username" => "stephenstrange",
            "password" => bcrypt("asd"),
            "spesialisasi" => "umum",
            "status" => "1",
            "no_str" => "123123",
            "no_hp" => "081237010255",
            "jenis_kelamin" => "L",
            "tanggal_lahir" => "1999-12-04",
            "alamat" => "Jl. Kenangan",
            "image" => "/uploads/img/asdasd.jpg",
        ]);

        Doctor::create([
            "name" => "Dr. Robert Downey Junior",
            "email"=> "robert@gmail.com",
            "username" => "robert",
            "password" => bcrypt("asd"),
            "spesialisasi" => "mata",
            "status" => "1",
            "no_str" => "123124",
            "no_hp" => "081237010255",
            "jenis_kelamin" => "L",
            "tanggal_lahir" => "1999-12-04",
            "alamat" => "Jl. Sukabirus",
            "image" => "/uploads/img/hulkbanner.jpg",
        ]);

        Doctor::create([
            "name" => "Dr. Sthepanie Poetri",
            "email"=> "poetri@gmail.com",
            "username" => "poetri",
            "password" => bcrypt("asd"),
            "spesialisasi" => "gigi",
            "status" => "1",
            "no_str" => "123125",
            "no_hp" => "081237010255",
            "jenis_kelamin" => "P",
            "tanggal_lahir" => "1999-12-04",
            "alamat" => "Jl. Sukapura",
            "image" => "/uploads/img/dokter2.jpg",
        ]);
    }
}
