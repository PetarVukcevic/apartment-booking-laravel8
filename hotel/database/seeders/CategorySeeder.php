<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'High End Apartments',
                'slug' => 'high-end-apartments',
                'description' => fake()->text(),
            ],
            [
                'id' => 2,
                'name' => 'Luxury Appartments',
                'slug' => 'luxury-apartments',
                'description' => fake()->text(),
            ],
            [
                'id' => 3,
                'name' => 'Economic Apartments',
                'slug' => 'economic_apartments',
                'description' => fake()->text(),
            ],
            [
                'id' => 4,
                'name' => 'Hotel Rooms',
                'slug' => 'hotel_rooms',
                'description' => fake()->text(),
            ],
        ]);
    }
}
