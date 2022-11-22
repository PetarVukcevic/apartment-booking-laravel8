<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('apartments')->insert([
           [
               'id' => 1,
               'title' => 'Petar Apartments',
               'user_id' => 1,
               'category_id' => 1,
               'city_id' => 1,
               'rooms' => 2,
               'adults' => 3,
               'price' => 290.00,
               'description' => '<p>' . implode('</p><p>' , fake()->paragraphs(2)) . '</p>',
               'img_url' => 'assets/images/shop/grid/1.jpg',
               'address' => fake()->address()
           ],
            [
                'id' => 2,
                'title' => 'Delta Lux',
                'user_id' => 2,
                'category_id' => 2,
                'city_id' => 2,
                'rooms' => 2,
                'adults' => 3,
                'price' => 290.00,
                'description' => '<p>' . implode('</p><p>' , fake()->paragraphs(2)) . '</p>',
                'img_url' => 'assets/images/shop/grid/1.jpg',
                'address' => fake()->address()
            ],
            [
                'id' => 3,
                'title' => 'Marko Lux',
                'user_id' => 3,
                'category_id' => 3,
                'city_id' => 3,
                'rooms' => 2,
                'adults' => 3,
                'price' => 290.00,
                'description' => '<p>' . implode('</p><p>' , fake()->paragraphs(2)) . '</p>',
                'img_url' => 'assets/images/shop/grid/1.jpg',
                'address' => fake()->address()
            ], [
                'id' => 4,
                'title' => 'Kane Lux',
                'user_id' => 4,
                'category_id' => 4,
                'city_id' => 4,
                'rooms' => 2,
                'adults' => 3,
                'price' => 290.00,
                'description' => '<p>' . implode('</p><p>' , fake()->paragraphs(2)) . '</p>',
                'img_url' => 'assets/images/shop/grid/1.jpg',
                'address' => fake()->address()
            ],
        ]);
    }
}
