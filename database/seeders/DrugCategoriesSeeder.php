<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrugCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            $drugCategory = new \App\Models\DrugCategories();
            $drugCategory->name = $faker->name;
            $drugCategory->save();
        }
    }
}
