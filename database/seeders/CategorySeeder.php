<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Teh Hitam', 'Teh Hijau', 'Teh Herbal', 'Teh Premium'];

        foreach ($categories as $name) {
            DB::table('category_product')->insert([
                'category_name' => $name,
                'description' => 'Kategori ' . $name,
                'created_at' => now(),
            ]);
        }
    }
}
