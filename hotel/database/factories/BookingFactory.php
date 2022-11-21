<?php

namespace Database\Factories;

use App\Models\Apartment;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'check_in' => fake()->dateTime(),
            'check_out' => fake()->dateTime(),
            'total_price' => 580.00,
            'user_id' => User::factory(),
            'apartment_id' => Apartment::factory(),
            'adults' => 3,
        ];
    }
}
