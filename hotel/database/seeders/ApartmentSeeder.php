<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
                'title' => 'Petar Apartments',
                'slug' => 'petar_apartments',
                'user_id' => 1,
                'category_id' => 1,
                'city_id' => 1,
                'rooms' => 2,
                'adults' => 3,
                'price' => 290.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Beogradska 21',
                'created_at' => date_create()
            ],
            [
                'title' => 'Delta Lux',
                'slug' => 'delta_lux',
                'user_id' => 2,
                'category_id' => 2,
                'city_id' => 2,
                'rooms' => 2,
                'adults' => 3,
                'price' => 225.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Oktoih 1',
                'created_at' => date_create()
            ],
            [
                'title' => 'Marko Lux',
                'slug' => 'marko_lux',
                'user_id' => 3,
                'category_id' => 2,
                'city_id' => 3,
                'rooms' => 2,
                'adults' => 3,
                'price' => 490.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Bulevar Ivana Crnojevica 160',
                'created_at' => date_create()
            ], [
                'title' => 'Kane Lux',
                'slug' => 'kane_lux',
                'user_id' => 4,
                'category_id' => 2,
                'city_id' => 4,
                'rooms' => 2,
                'adults' => 3,
                'price' => 130.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Marka Miljanova 14',
                'created_at' => date_create()
            ],
            [
                'title' => 'Marko Apartments',
                'slug' => 'marko_apartments',
                'user_id' => 3,
                'category_id' => 1,
                'city_id' => 1,
                'rooms' => 2,
                'adults' => 3,
                'price' => 150.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Dalmatinska 121',
                'created_at' => date_create()
            ],
            [
                'title' => 'Marija Apartments',
                'slug' => 'marija_apartments',
                'user_id' => 1,
                'category_id' => 1,
                'city_id' => 1,
                'rooms' => 2,
                'adults' => 3,
                'price' => 190.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Ulica slobode 11',
                'created_at' => date_create()
            ],
            [
                'title' => 'City Motel',
                'slug' => 'city_motel',
                'user_id' => 4,
                'category_id' => 3,
                'city_id' => 1,
                'rooms' => 4,
                'adults' => 3,
                'price' => 40.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Hercegovacka 32',
                'created_at' => date_create()
            ],
            [
                'title' => 'Cheap Room',
                'slug' => 'cheap_room',
                'user_id' => 2,
                'category_id' => 3,
                'city_id' => 1,
                'rooms' => 4,
                'adults' => 3,
                'price' => 40.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Hercegovacka 2',
                'created_at' => date_create()
            ],
            [
                'title' => 'Marko Room',
                'slug' => 'marko_room',
                'user_id' => 3,
                'category_id' => 3,
                'city_id' => 3,
                'rooms' => 1,
                'adults' => 1,
                'price' => 45.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Plitvicka 32',
                'created_at' => date_create()
            ],
            [
                'title' => 'Hotel Alexander',
                'slug' => 'hotel_alexander',
                'user_id' => 2,
                'category_id' => 4,
                'city_id' => 1,
                'rooms' => 1,
                'adults' => 2,
                'price' => 155.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Bulevar Sv. Petra Cetinjskog 12b',
                'created_at' => date_create()
            ],
            [
                'title' => 'Hotel Zabljak',
                'slug' => 'hotel_zabljak',
                'user_id' => 4,
                'category_id' => 4,
                'city_id' => 3,
                'rooms' => 1,
                'adults' => 2,
                'price' => 110.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Bulevar Sv. Petra Cetinjskog 12b',
                'created_at' => date_create()
            ],
            [
                'title' => 'Hotel Berane',
                'slug' => 'hotel_berane',
                'user_id' => 2,
                'category_id' => 4,
                'city_id' => 4,
                'rooms' => 2,
                'adults' => 3,
                'price' => 90.00,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'profile_img' => 'assets/images/shop/grid/apartman_pr.png',
                'view_img' => 'assets/images/shop/grid/apartman_single.png',
                'lg_profile_img' => 'assets/images/shop/grid/apartman_home.png',
                'address' => 'Beranska 21',
                'created_at' => date_create()
            ],


        ]);
    }
}
