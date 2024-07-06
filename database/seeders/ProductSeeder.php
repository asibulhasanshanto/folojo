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
        \App\Models\Product::factory(10)->create()->each(function ($product) use ($productImages) {
            foreach ($productImages as $image) {
                $product->images()->create([
                    'image' => $image,
                ]);
            }
        });
    }
}
