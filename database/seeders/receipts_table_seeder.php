<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class receipts_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipts')->insert([
            [
                'price' => 285.00,
                'items' => json_encode([
                    [
                        'product_name' => 'Wintermelon Milk Tea',
                        'quantity' => 2,
                    ],
                    [
                        'product_name' => 'Croissant',
                        'quantity' => 3,
                    ]
                    ])
            ]
        ]);
    }
}
