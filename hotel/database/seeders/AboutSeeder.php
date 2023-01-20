<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'id' => 1,
                'main_heading' => 'OUR STORY',
                'main_helper' => 'All About P Stays',
                'short_description' => 'P Stays is a leading developer of A-grade commercial, industrial and residential projects in USA.',
                'main_description' => 'Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly. Today P Property has over 4,000 professionals on its payroll. The company is active in Middle East, CIS and Europe. P Property has a team of specialists capable of maximizing the result and delivering projects of any complexity and scope. Our employees are acclaimed experts in such areas as project.',
                'heading_one' => 'QUALITY COMES FIRST',
                'description_one' => 'Cutting-edge construction quality management system LATISTA ensures high quality standards at all of the company’s sites. The control mechanism allows integrated monitoring of works at all stages of construction and includes over 100 quality assessment benchmarks.',
                'signature_img_url' => 'assets/images/call/sign.png',
                'heading_two' => 'WHY CHOOSE US',
                'helper_two' => 'Awesome Features'
            ]

        ]);
    }
}
