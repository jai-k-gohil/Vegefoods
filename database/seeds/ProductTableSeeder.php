<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'id' => 1,
            'category_id' => 1,
            'name' => 'Bell Pepper',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-1.jpg',
            'rating' => '5'
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 2,
            'category_id' => 2,
            'name' => 'Strawberry',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-2.jpg',
            'rating' => '5'
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 3,
            'category_id' => 1,
            'name' => 'Purple Cabbage',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-3.jpg',
            'rating' => '5'
        ]);
        $product->timestamps = false;
        $product->save();
    }
}
