<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'image' => 'assets/img/logokuliner.png',
            'title' => 'Kuliner Nusantara',
            'description' => 'Makanan khas Indonesia yang kaya rasa dan bumbu.',
            'price' => 15000.00,
            'stock' => 100
        ]);
    }
}
