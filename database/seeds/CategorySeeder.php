<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Shirt'
        ]);
        
        Category::create([
            'name' => 'T-Shirt'
        ]);

        Category::create([
            'name' => 'Shoes'
        ]);

        Category::create([
            'name' => 'Hat'
        ]);

        Category::create([
            'name' => 'Men'
        ]);

        Category::create([
            'name' => 'Women'
        ]);

        Category::create([
            'name' => 'Kids'
        ]);
    }
}
