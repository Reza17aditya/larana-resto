<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foodCategory = DB::table('categories')->where('category_name', 'Makanan')->first();
        $drinkCategory = DB::table('categories')->where('category_name', 'Minuman')->first();
        $snackCategory = DB::table('categories')->where('category_name', 'Camilan')->first();

        // makanan
        $menus = [
            [
                'category_id' => $foodCategory->id,
                'Menu_name' => 'Makanan 1',
                'description' => 'Deskripsi makanan 1',
                'price' => 20000,
                'image_url' => 'image/menu/1.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $foodCategory->id,
                'Menu_name' => 'Makanan 2',
                'description' => 'Deskripsi makanan 2',
                'price' => 20000,
                'image_url' => 'image/menu/1.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $foodCategory->id,
                'Menu_name' => 'Makanan 3',
                'description' => 'Deskripsi makanan 3',
                'price' => 20000,
                'image_url' => 'image/menu/1.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $foodCategory->id,
                'Menu_name' => 'Makanan 4',
                'description' => 'Deskripsi makanan 4',
                'price' => 20000,
                'image_url' => 'image/menu/1.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $foodCategory->id,
                'Menu_name' => 'Makanan 5',
                'description' => 'Deskripsi makanan 5',
                'price' => 20000,
                'image_url' => 'image/menu/1.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $foodCategory->id,
                'Menu_name' => 'Makanan 6',
                'description' => 'Deskripsi makanan 6',
                'price' => 20000,
                'image_url' => 'image/menu/1.png',
                'preparation_time' => 10
            ],

        // minuman
            [
                'category_id' => $drinkCategory->id,
                'Menu_name' => 'minuman 1',
                'description' => 'Deskripsi minuman 1',
                'price' => 20000,
                'image_url' => 'image/menu/2.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $drinkCategory->id,
                'Menu_name' => 'minuman 2',
                'description' => 'Deskripsi minuman 2',
                'price' => 20000,
                'image_url' => 'image/menu/2.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $drinkCategory->id,
                'Menu_name' => 'minuman 3',
                'description' => 'Deskripsi minuman 3',
                'price' => 20000,
                'image_url' => 'image/menu/2.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $drinkCategory->id,
                'Menu_name' => 'minuman 4',
                'description' => 'Deskripsi minuman 4',
                'price' => 20000,
                'image_url' => 'image/menu/2.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $drinkCategory->id,
                'Menu_name' => 'minuman 5',
                'description' => 'Deskripsi minuman 5',
                'price' => 20000,
                'image_url' => 'image/menu/2.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $drinkCategory->id,
                'Menu_name' => 'minuman 6',
                'description' => 'Deskripsi minuman 6',
                'price' => 20000,
                'image_url' => 'image/menu/2.png',
                'preparation_time' => 10
            ],

            // camilan
            [
                'category_id' => $snackCategory->id,
                'Menu_name' => 'camilan 1',
                'description' => 'Deskripsi camilan 1',
                'price' => 20000,
                'image_url' => 'image/menu/3.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $snackCategory->id,
                'Menu_name' => 'camilan 2',
                'description' => 'Deskripsi camilan 2',
                'price' => 20000,
                'image_url' => 'image/menu/3.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $snackCategory->id,
                'Menu_name' => 'camilan 3',
                'description' => 'Deskripsi camilan 3',
                'price' => 20000,
                'image_url' => 'image/menu/3.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $snackCategory->id,
                'Menu_name' => 'camilan 4',
                'description' => 'Deskripsi camilan 4',
                'price' => 20000,
                'image_url' => 'image/menu/3.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $snackCategory->id,
                'Menu_name' => 'camilan 5',
                'description' => 'Deskripsi camilan 5',
                'price' => 20000,
                'image_url' => 'image/menu/3.png',
                'preparation_time' => 10
            ],

            [
                'category_id' => $snackCategory->id,
                'Menu_name' => 'camilan 6',
                'description' => 'Deskripsi camilan 6',
                'price' => 20000,
                'image_url' => 'image/menu/3.png',
                'preparation_time' => 10
            ],
        ];

        DB::table('menus')->insert($menus);
    }   
}
