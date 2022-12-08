<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            'welcome' => 'welcome to my world',
            'intro' => "Hi i'm",
            'professions' => json_encode(['backend developer', 'software developer', 'frontend developer']),
            'bio' => 'this is my bio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
