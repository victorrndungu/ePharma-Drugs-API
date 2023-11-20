<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            $user = new \App\Models\User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = \Illuminate\Support\Facades\Hash::make('password');
            $user->save();
        }
    }
}
