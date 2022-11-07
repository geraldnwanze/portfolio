<?php

namespace Database\Seeders;

use App\Models\PageSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            'page' => 'home',
            'data' => [
                'hero' => [
                    'welcome' => 'WELCOME TO MY WORLD',
                    'intro' => 'Hi, I’m Nwanze Gerald',
                    'job_1' => 'software engineer',
                    'job_2' => 'software developer',
                    'job_3' => 'professional coder',
                    'bio' => 'I use animation as a third dimension by which to simplify experiences and kuiding thro each and every interaction. I’m not adding motion just to spruce things up, but doing it in ways that.',
                    'social_text' => 'connect with me on'
                ]
            ]
        ];
        PageSetting::create($input);
    }
}
