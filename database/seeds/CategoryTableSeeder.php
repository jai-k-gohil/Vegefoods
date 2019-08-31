<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'id' => 1,
            'name' => 'vegetables'
        ]);
        $category->timestamps = false;
        $category->save();

        $category = new Category([
            'id' => 2,
            'name' => 'fruits'
        ]);
        $category->timestamps = false;
        $category->save();

        $category = new Category([
            'id' => 3,
            'name' => 'juices'
        ]);
        $category->timestamps = false;
        $category->save();

        $category = new Category([
            'id' => 4,
            'name' => 'dried'
        ]);
        $category->timestamps = false;
        $category->save();
    }
}
