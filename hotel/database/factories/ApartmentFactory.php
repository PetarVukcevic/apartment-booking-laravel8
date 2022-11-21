<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
 */
class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'city_id' => City::factory(),
            'rooms' => 2,
            'adults' => 3,
            'price' => 290.00,
            'description' => '<p>' . implode('</p><p>' , fake()->paragraphs(2)) . '</p>',
            'img_url' => '/public/assets/images',
            'address' => fake()->address()

        ];
    }
}
