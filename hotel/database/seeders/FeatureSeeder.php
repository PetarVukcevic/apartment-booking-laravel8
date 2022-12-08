<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('features')->insert([
            [
                'id' => 1,
                'title' => 'About P Property',
                'description' => 'Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly. Today P Property has over 4,000 professionals on its payroll. The company is active in Middle East.',
                'about_id' => 1
            ],
            [
                'id' => 2,
                'title' => 'Our Mission',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities.',
                'about_id' => 1
            ],
            [
                'id' => 3,
                'title' => 'Our Goals',
                'description' => 'P Stays is a leading developer of A-grade commercial, industrial and residential projects in USA. Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly.',
                'about_id' => 1
            ],
        ]);
    }
}
