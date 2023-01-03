<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'name' => 'Marko Markovic',
                'email' => 'marko.markovic@gmail.com',
                'apartment_id' => random_int(1, 10),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'name' => 'Petar Markovic',
                'email' => 'petar.markovic@gmail.com',
                'apartment_id' => random_int(1, 10),
                'grade' => 5,
                'comment' => fake()->paragraph()
            ],
            [
                'name' => 'Lazar Radovic',
                'email' => 'lazar.radovic@gmail.com',
                'apartment_id' => random_int(1, 10),
                'grade' => 4,
                'comment' => fake()->paragraph()
            ],
            [
                'name' => 'Filip Petrovic',
                'email' => 'filip.petrovic@gmail.com',
                'apartment_id' => random_int(1, 10),
                'grade' => 3.5,
                'comment' => fake()->paragraph()
            ],
            [
                'name' => 'Marko Markovic',
                'email' => 'marko.markovic@gmail.com',
                'apartment_id' => random_int(1, 10),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'name' => 'Marko Markovic',
                'email' => 'marko.markovic@gmail.com',
                'apartment_id' => random_int(1, 10),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'name' => 'Marko Markovic',
                'email' => 'marko.markovic@gmail.com',
                'apartment_id' => random_int(1, 10),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
        ]);
    }
}
