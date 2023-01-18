<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'Petar',
                'last_name' => 'Vukcevic',
                'username' => 'petarvukcevic',
                'email' => 'petarvukcevic@goldbear.me',
                'phone_number' => fake()->phoneNumber(),
                'password' => '$2y$10$mi150b/u0qmXpcvoZYb04uqgabwSc.NzJoZNn9QOphwMKq.GCKRjy',

            ],
            [
                'id' => 2,
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'username' => fake()->unique()->userName(),
                'email' => fake()->unique()->safeEmail(),
                'phone_number' => fake()->phoneNumber(),
                'password' => '$2y$10$mi150b/u0qmXpcvoZYb04uqgabwSc.NzJoZNn9QOphwMKq.GCKRjy',
            ],
            [
                'id' => 3,
                'first_name' => 'Marko',
                'last_name' => 'Markovic',
                'username' => 'markomarkovic',
                'email' => 'markomarkovic@goldbear.me',
                'phone_number' => fake()->phoneNumber(),
                'password' => '$2y$10$mi150b/u0qmXpcvoZYb04uqgabwSc.NzJoZNn9QOphwMKq.GCKRjy',
            ],
            [
                'id' => 4,
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'username' => fake()->unique()->userName(),
                'email' => fake()->unique()->safeEmail(),
                'phone_number' => fake()->phoneNumber(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            ],

        ]);

    }
}
