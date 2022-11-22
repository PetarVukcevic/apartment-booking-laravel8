<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bookings')->insert([
            [
                'check_in' => fake()->dateTime(),
                'check_out' => fake()->dateTime(),
                'total_price' => 580.00,
                'user_id' => 1,
                'apartment_id' => random_int(2, 4),
                'adults' => 3,
            ],
            [
                'check_in' => fake()->dateTime(),
                'check_out' => fake()->dateTime(),
                'total_price' => 580.00,
                'user_id' => 2,
                'apartment_id' => 4,
                'adults' => 3,
            ],
            [
                'check_in' => fake()->dateTime(),
                'check_out' => fake()->dateTime(),
                'total_price' => 580.00,
                'user_id' => 1,
                'apartment_id' => random_int(2, 4),
                'adults' => 3,
            ],
            [
                'check_in' => fake()->dateTime(),
                'check_out' => fake()->dateTime(),
                'total_price' => 580.00,
                'user_id' => 4,
                'apartment_id' => random_int(1, 3),
                'adults' => 2,
            ],
        ]);
    }
}
