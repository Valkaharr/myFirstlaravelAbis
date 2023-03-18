<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ingredients_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            [
                'name' => 'Milk',
                'description' => 'Fresh and creamy',
                'quantity' => 59
            ],
            [
                'name' => 'Boba',
                'description' => 'A must in any milk tea store',
                'quantity' => 30
            ],
            [
                'name' => 'Wrapper',
                'description' => 'Wrapper for many philippine dishes',
                'quantity' => 50
            ],
            [
                'name' => 'Sugar',
                'description' => 'Sweet and Simple',
                'quantity' => 90
            ],
            [
                'name' => 'Yeast',
                'description' => 'Needed for baking',
                'quantity' => 30
            ],
            [
                'name' => 'Flour',
                'description' => 'The foundation of every pastry, bread and cake dish out there',
                'quantity' => 60
            ],
            [
                'name' => 'Banana',
                'description' => 'Favorite of Monkeys',
                'quantity' => 75
            ]
        ]);
    }
}
