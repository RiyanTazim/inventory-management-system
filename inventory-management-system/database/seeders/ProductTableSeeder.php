<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([

            [
                'name' => 'Laptop',
                'quantity' => '1',
                'price' => '50000',
            ],

            [
                'name' => 'Mobile',
                'quantity' => '3',
                'price' => '20000',
            ],

            [
                'name' => 'Desktop',
                'quantity' => '2',
                'price' => '40000',
            ]

        ]);
    }
}
