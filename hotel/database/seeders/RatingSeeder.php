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
                'user_id' => random_int(1, 4),
                'apartment_id' => random_int(1, 4),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => random_int(1, 4),
                'apartment_id' => random_int(1, 4),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => random_int(1, 4),
                'apartment_id' => random_int(1, 4),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
            [
                'user_id' => random_int(1, 4),
                'apartment_id' => random_int(1, 4),
                'grade' => 4.5,
                'comment' => fake()->paragraph()
            ],
        ]);
    }
}
