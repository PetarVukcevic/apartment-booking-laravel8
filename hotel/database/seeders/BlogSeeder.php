<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blogs')->insert([
            [
                'id' => 1,
                'description' => 'In P Stays, understanding the needs of clients is our professional duty. We individually assess each plan and offer optimal solutions, proceeding from the project’s objectives and specifics. The company’s stable financial standing enables us to set minimal advance payment rates and a comfortable schedule of financing for our awesome client',
                'author' => 'Petar Vukcevic',
                'author_role' => 'Investor',
                'author_img_url' => 'assets/images/testimonial/3.png',
                'about_id' => 1
            ],
            [
                'id' => 2,
                'description' => 'The skills of our project managers are attested by international certificates from leading overseas professional associations in the realm of construction, land use and real estate. ',
                'author' => 'Vukac Vukcevic',
                'author_role' => 'Director',
                'author_img_url' => 'assets/images/testimonial/3.png',
                'about_id' => 1
            ],
            [
                'id' => 3,
                'description' => 'P stays Group carries out full-cycle development, including the attraction of investments, construction and managing premium residential and non-residential properties.',
                'author' => 'Jovana Vukcevic',
                'author_role' => 'Sales Manager',
                'author_img_url' => 'assets/images/testimonial/3.png',
                'about_id' => 1
            ]
        ]);
    }
}
