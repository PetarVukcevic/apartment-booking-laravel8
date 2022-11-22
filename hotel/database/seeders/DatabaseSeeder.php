<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Apartment;
use App\Models\Booking;
use App\Models\Category;
use App\Models\City;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CateegorySeeder::class,
            CitySeeder::class,
            ApartmentSeeder::class,
            BookingSeeder::class,
            RatingSeeder::class

        ]);
    }
}
