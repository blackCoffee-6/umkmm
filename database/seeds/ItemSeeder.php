<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product 1
        Item::create([
            'category_id' => 1,
            'product_id' => 1
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 1
        ]);

        Item::create([
            'category_id' => 6,
            'product_id' => 1
        ]);

        // Product 2
        Item::create([
            'category_id' => 1,
            'product_id' => 2
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 2
        ]);

        Item::create([
            'category_id' => 6,
            'product_id' => 2
        ]);

         // Product 3
         Item::create([
            'category_id' => 2,
            'product_id' => 3
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 3
        ]);

        Item::create([
            'category_id' => 6,
            'product_id' => 3
        ]);

         // Product 4
         Item::create([
            'category_id' => 3,
            'product_id' => 4
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 4
        ]);

        Item::create([
            'category_id' => 6,
            'product_id' => 4
        ]);

        // Product 5
        Item::create([
            'category_id' => 3,
            'product_id' => 5
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 5
        ]);

        Item::create([
            'category_id' => 6,
            'product_id' => 5
        ]);

        // Product 6
        Item::create([
            'category_id' => 4,
            'product_id' => 6
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 6
        ]);

        Item::create([
            'category_id' => 6,
            'product_id' => 6
        ]);

        Item::create([
            'category_id' => 7,
            'product_id' => 6
        ]);
    }
}
