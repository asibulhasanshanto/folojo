<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productImages = [
            'product.jpg',
            'product2.png',
        ];
        // seed product using products factory and also insert product images for each product
    \App\Models\Product::factory(1)->create();
    }
}