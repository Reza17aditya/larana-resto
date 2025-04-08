<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Makanan', 'description' => 'Menu utama berupa makanan berat'],
            ['category_name' => 'Minuman', 'description' => 'Berbagai jenis minuman segar'],
            ['category_name' => 'Camilan', 'description' => 'Makanan ringan untuk menemani waktu nongkrong'],
        ]);
    }
}
