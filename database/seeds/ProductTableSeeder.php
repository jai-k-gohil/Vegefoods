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
            'rating' => '5',
            'discount' => 30
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
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 3,
            'category_id' => 1,
            'name' => 'Green Beans',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-3.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 4,
            'category_id' => 1,
            'name' => 'Purple Cabbage',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-4.jpg',
            'rating' => '5',
            'discount' => 15
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 5,
            'category_id' => 1,
            'name' => 'Tomato',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-5.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 6,
            'category_id' => 1,
            'name' => 'Brocolli',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-6.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 7,
            'category_id' => 1,
            'name' => 'Carrots',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-7.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 8,
            'category_id' => 3,
            'name' => 'Fruit Juice',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-8.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 9,
            'category_id' => 1,
            'name' => 'Onion',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-9.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 10,
            'category_id' => 2,
            'name' => 'Apple',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-10.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 11,
            'category_id' => 1,
            'name' => 'Garlic',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-11.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();

        $product = new Product([
            'id' => 12,
            'category_id' => 1,
            'name' => 'Chilli',
            'price' => 120,
            'quantity' =>100,
            'description' => 'This is some random product description!!',
            'image' => 'product-12.jpg',
            'rating' => '5',
            'discount' => 0
        ]);
        $product->timestamps = false;
        $product->save();
    }
}
