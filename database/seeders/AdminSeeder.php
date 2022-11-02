<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
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
                'role' => 'admin',
                'name' => 'Nwanze Gerald',
                'email' => 'admin@portfolio.com',
                'password' => 123456
            ]
        );

        for ($i = 0; $i < 11; $i++) {
            User::create([
                'role' => 'admin',
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => 123456
            ]);
        }
    }
}
