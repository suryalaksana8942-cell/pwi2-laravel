<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'name_product' => 'Teh ' . $faker->word(),
                'stock_product' => $faker->numberBetween(5, 100),
                'price_product' => $faker->numberBetween(10, 150) * 1000,
                'desc_product' => $faker->sentence(8),
                'id_category' => $faker->numberBetween(1, 4),
                'created_at' => now(),
            ]);
        }
    }
}