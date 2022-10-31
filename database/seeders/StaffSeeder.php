<?php

namespace Database\Seeders;

use App\Models\Staff;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Staff::create(
            [
                'name' => $faker->name,
                'email' => 'staff@portfolio.com',
                'password' => 123456
            ]
        );
    }
}
