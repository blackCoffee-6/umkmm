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

        // Product 2
        Item::create([
            'category_id' => 1,
            'product_id' => 2
        ]);

        Item::create([
            'category_id' => 5,
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

         // Product 4
         Item::create([
            'category_id' => 3,
            'product_id' => 4
        ]);

        Item::create([
            'category_id' => 5,
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

        // Product 6
        Item::create([
            'category_id' => 4,
            'product_id' => 6
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 6
        ]);

        // Product 7
        Item::create([
            'category_id' => 1,
            'product_id' => 7
        ]);
        Item::create([
            'category_id' => 5,
            'product_id' => 7
        ]);

        //Product 8
        Item::create([
            'category_id' => 1,
            'product_id' => 8
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 8
        ]);

        //Product 9
        Item::create([
            'category_id' => 1,
            'product_id' => 9
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 9
        ]);

        //Product 11
        Item::create([
            'category_id' => 2,
            'product_id' => 11
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 11
        ]);

        //Product 12
        Item::create([
            'category_id' => 2,
            'product_id' => 12
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 12
        ]);

        //Product 13
        Item::create([
            'category_id' => 2,
            'product_id' => 13
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 13
        ]);

        //Product 14
        Item::create([
            'category_id' => 2,
            'product_id' => 14
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 14
        ]);

        //Product 15
        Item::create([
            'category_id' => 3,
            'product_id' => 15
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 15
        ]);

        //Product 16
        Item::create([
            'category_id' => 3,
            'product_id' => 16
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 16
        ]);

        //Product 17
        Item::create([
            'category_id' => 3,
            'product_id' => 17
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 17
        ]);

        //Product 18
        Item::create([
            'category_id' => 3,
            'product_id' => 18
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 18
        ]);

        //Product 19
        Item::create([
            'category_id' => 4,
            'product_id' => 19
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 19
        ]);

        //Product 20
        Item::create([
            'category_id' => 4,
            'product_id' => 20
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 20
        ]);

        //Product 21
        Item::create([
            'category_id' => 4,
            'product_id' => 21
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 21
        ]);

        //Product 22
        Item::create([
            'category_id' => 4,
            'product_id' => 22
        ]);

        Item::create([
            'category_id' => 5,
            'product_id' => 22
        ]);
    }
}
