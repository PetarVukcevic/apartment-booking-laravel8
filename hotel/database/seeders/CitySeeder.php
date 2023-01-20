<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            [
                'id' => 1,
                'name' => 'Podgorica',
                'description' => fake()->text()
            ],
            [
                'id' => 2,
                'name' => 'Tivat',
                'description' => fake()->text()
            ],
            [
                'id' => 3,
                'name' => 'Zabljak',
                'description' => fake()->text()
            ],
            [
                'id' => 4,
                'name' => 'Berane',
                'description' => fake()->text()
            ],
        ]);
    }
}
