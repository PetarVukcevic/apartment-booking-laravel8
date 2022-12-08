<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('badges')->insert([
            [
                'title' => 'Always Available',
                'description' => 'all construction sites open for visitors, with 24/7 video surveillance being conducted at all objects',
                'icon_class' => 'lnr lnr-calendar-full',
                'about_id' => 1
            ],
            [
                'title' => 'Qualified Agents',
                'description' => 'We have a team of specialists capable of maximizing the result and delivering the projects',
                'icon_class' => 'lnr lnr-briefcase',
                'about_id' => 1
            ],
            [
                'title' => 'Fair Prices',
                'description' => 'you can be 100% sure that it will be delivered right on time, within the set budget limits',
                'icon_class' => 'lnr lnr-database',
                'about_id' => 1
            ],
            [
                'title' => 'Best Offers',
                'description' => 'All aspects of the operations being transparent and clear for clients and partners',
                'icon_class' => 'lnr lnr-cart',
                'about_id' => 1
            ],
        ]);
    }
}
