<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create('id_ID');

        $patientsData = [];

        Patient::create( [
            'username' => 'abiwidi',
            'name' => 'Abi Widiarta',
            'email' => 'abiwidiarta@student.telkomuniversity.ac.id',
            'password' => 'AAAAa1!',
            'nim' => '1301213196',
            'email_verified_at' => '2023-12-11 02:51:12'
        ]);

        for ($i = 1; $i <= 29; $i++) {
            $rawUsername = $faker->unique()->userName;
            $truncatedUsername = substr($rawUsername, 0, 15);
            $patientsData[] = [
                'username' =>  $truncatedUsername,
                'name' => $faker->name,
                'email' => $truncatedUsername . '@student.telkomuniversity.ac.id',
                'password' => bcrypt('AAAAa1!'),
                'nim' => $faker->numberBetween(1000000000, 9999999999),
                'email_verified_at' => $faker->dateTimeThisMonth('2023-12-11 02:51:12'),
            ];
        }
        
        // Simpan data dummy ke database atau lakukan sesuai kebutuhan Anda
        foreach ($patientsData as $data) {
            Patient::create($data);
        }
    }
}
