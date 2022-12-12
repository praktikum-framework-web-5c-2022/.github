<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);

        for($i=0;$i<10;$i++){
            Mahasiswa::create([
                'npm' => $faker->unique()->numerify('25###########'),
                'nama' => $faker->firstName." ".$faker->lastName,
            ]);
        }

        Matakuliah::create([
            'kode' => 'IF001',
            'nama' => 'Framework Pemrograman Web',
            'sks' => 4
        ]);
        Matakuliah::create([
            'kode' => 'IF002',
            'nama' => 'Pemrograman Berbasis Mobile',
            'sks' => 3
        ]);
        Matakuliah::create([
            'kode' => 'IF003',
            'nama' => 'Algoritma dan Pemrograman',
            'sks' => 3
        ]);
    }
}
