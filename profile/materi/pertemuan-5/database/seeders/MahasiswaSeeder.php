<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            Mahasiswa::create([
                'npm' => $faker->unique()->numerify('20###########'),
                'nama' => $faker->firstName . " " . $faker->lastName,
                'ipk' => $faker->randomFloat(2, 2, 4)
            ]);
        }
    }
}
