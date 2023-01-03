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
                'user_id' => 1,
                'apartment_id' => random_int(1, 12),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 1,
                'apartment_id' => random_int(1, 12),
                'grade' => 5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 1,
                'apartment_id' => random_int(1, 12),
                'grade' => 4,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 2,
                'apartment_id' => random_int(1, 12),
                'grade' => 3.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 1,
                'apartment_id' => random_int(1, 12),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 3,
                'apartment_id' => random_int(1, 12),
                'grade' => 5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 4,
                'apartment_id' => random_int(1, 12),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],            [
                'user_id' => 2,
                'apartment_id' => random_int(1, 12),
                'grade' => 3.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 1,
                'apartment_id' => random_int(1, 12),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => 3,
                'apartment_id' => random_int(1, 12),
                'grade' => 5,
                'comment' => fake()->paragraph()
            ],
        ]);
    }
}
