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
                'label' => 'headingOne',
                'collapse' => 'collapse01',
                'heading_num' => 'heading1'
            ],
            [
                'title' => 'Our mission',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'label' => 'headingTwo',
                'collapse' => 'collapse02',
                'heading_num' => 'heading2'
            ],
            [
                'title' => 'If I have questions, where can I find answers?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'label' => 'headingThree',
                'collapse' => 'collapse03',
                'heading_num' => 'heading3'
            ],
            [
                'title' => 'What payment methods are available?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'label' => 'headingFour',
                'collapse' => 'collapse04',
                'heading_num' => 'heading4'
            ],
            [
                'title' => 'About Our apartments',
                'description' => 'Since its foundation the company has doubled its turnover year on year, with its staff numbers swelling accordingly. Today P Property has over 4,000 professionals on its payroll. The company is active in Middle East.',
                'label' => 'headingFive',
                'collapse' => 'collapse05',
                'heading_num' => 'heading5'
            ],
            [
                'title' => 'Our mission',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'label' => 'headingSix',
                'collapse' => 'collapse06',
                'heading_num' => 'heading6'
            ],            [
                'title' => 'If I have questions, where can I find answers?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'label' => 'headingSeven',
                'collapse' => 'collapse07',
                'heading_num' => 'heading7'
            ],
            [
                'title' => 'What payment methods are available?',
                'description' => 'We do only what we are great on. If we tackle a project you can be 100% sure that it will be delivered right on time, within the set budget limits and at the top level. We get all our liabilities insured, including third-party liabilities, thus indemnifying our clients against all risks.',
                'label' => 'headingEight',
                'collapse' => 'collapse08',
                'heading_num' => 'heading8'
            ],
        ]);
    }
}
