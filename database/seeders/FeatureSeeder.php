<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            ['icon' => 'globe', 'title' => 'Web App Development', 'description' => 'bla bla bla', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['icon' => 'layout', 'title' => 'Frontend Development', 'description' => 'bla bla bla', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['icon' => 'settings', 'title' => 'Backend Development', 'description' => 'bla bla bla', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        for ($i=0; $i < count($values); $i++) { 
            DB::table('features')->insert($values[$i]);
        }
    }
}
