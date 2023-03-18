<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Winter Melon Milk Tea',
                'price' => 69.0,
                'description' => 'A classic Milk Tea adored all over the world.',
                'ingredients' => json_encode(['Boba', 'Wintermelon Extract', 'Sugar'])

            ],
            [
                'name' => 'Croissant',
                'price' => 49.0,
                'description' => 'A fresh and tasty bread that is a great pair to any drink',
                'ingredients' => json_encode(['Yeast', 'Flour', 'Sugar', 'Milk'])
            ],
            [
                'name' => 'Turon',
                'price' => 19.0,
                'description' => 'A crispy wrapped banana that is a classic for everyone',
                'ingredients' => json_encode(['Wrapper', 'Banana'])
            ]
        ]);
    }
}
