<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'        => 'Christmas Black Shirt',
            'stock'       => 7,
            'price'       => 19.14,
            'description' => 'Plain black with christmas tree ornament sablons, Silk material',
            'image'       => 'shirts_1.jpg',
            'slug'        => 'christmas-black-shirt'
        ]);

        Product::create([
            'name'        => 'Black Shirt',
            'stock'       => 4,
            'price'       => 15.45,
            'description' => 'Black shirt with ornament sablons, Silk material',
            'image'       => 'shirts_2.jpg',
            'slug'        => 'black-shirt'
        ]);

        Product::create([
            'name'        => 'Blue V Neck',
            'stock'       => 7,
            'price'       => 12.00,
            'description' => 'Plain blue t-shirt with good material, make comfortable to do daily activity',
            'image'       => 'tshirts_1.jpg',
            'slug'        => 'blue-v-neck'
        ]);

        Product::create([
            'name'        => 'Sporty Shoes',
            'stock'       => 13,
            'price'       => 73.14,
            'description' => 'Sporty shoes to run better in Outdoor',
            'image'       => 'shoes_1.jpg',
            'slug'        => 'sporty-shoes'
        ]);

        Product::create([
            'name'        => 'Yellow Shoes',
            'stock'       => 15,
            'price'       => 63.14,
            'description' => 'Yellow shoes to aesthetic shot better in Social Media',
            'image'       => 'shoes_2.jpg',
            'slug'        => 'yellow-shoes'
        ]);

        Product::create([
            'name'        => 'Black Hat',
            'stock'       => 4,
            'price'       => 7.14,
            'description' => 'Yellow shoes to aesthetic shot better in Social Media',
            'image'       => 'shoes_1.jpg',
            'slug'        => 'black-hat'
        ]);
    }
}
