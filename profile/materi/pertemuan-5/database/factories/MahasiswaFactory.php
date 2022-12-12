<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        return [
            'npm' => $faker->unique()->numerify('20###########'),
            'nama' => $faker->firstName . " " . $faker->lastName,
            'ipk' => $faker->randomFloat(2, 2, 4)
        ];
    }
}
