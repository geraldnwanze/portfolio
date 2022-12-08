<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            ['name' => 'twitter', 'url' => 'https://twitter.com/NwanzeGerald'],
            ['name' => 'linkedin', 'url' => 'https://www.linkedin.com/in/gerald-nwanze-a767a3186'],
            ['name' => 'mail', 'url' => 'mailto:'.contact_email()]
        ];

        for ($i=0; $i < count($values); $i++) { 
            DB::table('socials')->insert($values[$i]);
        }
    }
}
