<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
            [
                'title' => 'About Our apartments',
                'description' => 'Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly. Today P Property has over 4,000 professionals on its payroll. The company is active in Middle East.',
                'collapse' => 'collapse01'
            ],
            [
                'title' => 'Our mission',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'collapse' => 'collapse02'
            ],
            [
                'title' => 'If I have questions, where can I find answers?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'collapse' => 'collapse03'
            ],
            [
                'title' => 'What payment methods are available?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'collapse' => 'collapse04'
            ],
            [
                'title' => 'About Our apartments',
                'description' => 'Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly. Today P Property has over 4,000 professionals on its payroll. The company is active in Middle East.',
                'collapse' => 'collapse05'
            ],
            [
                'title' => 'Our mission',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'collapse' => 'collapse06'
            ],            [
                'title' => 'If I have questions, where can I find answers?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'collapse' => 'collapse07'
            ],
            [
                'title' => 'What payment methods are available?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'collapse' => 'collapse08'
            ],
        ]);
    }
}
