<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\User;
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
        User::create(
            [
                'role' => 'staff',
                'name' => $faker->name,
                'email' => 'staff@portfolio.com',
                'password' => 123456
            ]
        );

        for ($i = 0; $i < 50; $i++) {
            User::create([
                'role' => 'staff',
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => 123456
            ]);
        }
    }
}
