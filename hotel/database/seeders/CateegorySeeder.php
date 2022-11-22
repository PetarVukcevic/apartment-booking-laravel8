<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CateegorySeeder extends Seeder
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
                'name' => fake()->word(),
                'description' => fake()->text(),
            ],
            [
                'id' => 2,
                'name' => fake()->word(),
                'description' => fake()->text(),
            ],
            [
                'id' => 3,
                'name' => fake()->word(),
                'description' => fake()->text(),
            ],
            [
                'id' => 4,
                'name' => fake()->word(),
                'description' => fake()->text(),
            ],
        ]);
    }
}
