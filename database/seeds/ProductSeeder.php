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

        Product::create([
            'name'        => 'Green Shirt',
            'stock'       => 12,
            'price'       => 102,
            'description' => 'Green shirt with good material, cotton material',
            'image'       => 'shirts_3.jpeg',
            'slug'        => 'green-shirt'
        ]);

        Product::create([
            'name'        => 'Lime Shirt',
            'stock'       => 12,
            'price'       => 102,
            'description' => 'Lime shirt with good material, cotton material',
            'image'       => 'shirts_4.jpg',
            'slug'        => 'lime-shirt'
        ]);

        Product::create([
            'name'        => 'Dark Lime Shirt',
            'stock'       => 21,
            'price'       => 122,
            'description' => 'Dark Lime shirt with good material, cotton material',
            'image'       => 'shirts_5.jpeg',
            'slug'        => 'dark-lime-shirt'
        ]);

        Product::create([
            'name'        => 'Dark Lime Shirt',
            'stock'       => 21,
            'price'       => 122,
            'description' => 'Dark Lime shirt with good material, cotton material',
            'image'       => 'shirts_5.jpeg',
            'slug'        => 'dark-lime-shirt'
        ]);

        Product::create([
            'name'        => 'Blue T-Shirt',
            'stock'       => 43,
            'price'       => 89.00,
            'description' => 'Plain blue t-shirt with good material, make comfortable to do daily activity',
            'image'       => 'tshirts_2.jpg',
            'slug'        => 'blue-tshirt'
        ]);

        Product::create([
            'name'        => 'Polo T-Shirt',
            'stock'       => 32,
            'price'       => 145.00,
            'description' => 'Polo t-shirt with good material, make comfortable to do daily activity',
            'image'       => 'tshirts_3.jpg',
            'slug'        => 'polo-tshirt'
        ]);

        Product::create([
            'name'        => 'Polo Orange T-Shirt',
            'stock'       => 43,
            'price'       => 89.00,
            'description' => 'Polo Orange t-shirt with good material, make comfortable to do daily activity',
            'image'       => 'tshirts_4.jpg',
            'slug'        => 'orange-tshirt'
        ]);

        Product::create([
            'name'        => 'White T-Shirt',
            'stock'       => 32,
            'price'       => 99.00,
            'description' => 'Polo Orange t-shirt with good material, make comfortable to do daily activity',
            'image'       => 'tshirts_5.jpg',
            'slug'        => 'white-tshirt'
        ]);

        Product::create([
            'name'        => 'Adidas Pro Model',
            'stock'       => 7,
            'price'       => 462.00,
            'description' => 'Adidas Pro Model have all the details you love about the lower version but in a mid-cut silhouette for extra support',
            'image'       => 'shoes_3.jpg',
            'slug'        => 'adidas-shoes'
        ]);

        Product::create([
            'name'        => 'AM102 Archmodels',
            'stock'       => 4,
            'price'       => 447.00,
            'description' => 'Highly detailed models of shoes with all textures, shaders and materials',
            'image'       => 'shoes_4.jpg',
            'slug'        => 'archmodels-shoes'
        ]);

        Product::create([
            'name'        => 'Nike Air Fear of God (Limited Edition)',
            'stock'       => 3,
            'price'       => 786.00,
            'description' => 'Futuristic shoes, Sneakers Fashion',
            'image'       => 'shoes_5.jpg',
            'slug'        => 'nike-shoes'
        ]);

        Product::create([
            'name'        => 'Reebok Club C 1985 TV Model Vintage',
            'stock'       => 9,
            'price'       => 526.00,
            'description' => 'Take it down to pure essence with clean lines and classic lineage',
            'image'       => 'shoes_6.jpg',
            'slug'        => 'reebok-shoes'
        ]);

        Product::create([
            'name'        => 'Baseball Cap Snapback ROCK',
            'stock'       => 19,
            'price'       => 76.14,
            'description' => 'Sport Hat material cotton Original',
            'image'       => 'hats_2.jpg',
            'slug'        => 'snapback-hat'
        ]);

        Product::create([
            'name'        => 'Snapback T Outdoor',
            'stock'       => 23,
            'price'       => 64.15,
            'description' => 'Outdoor Hat material cotton Original',
            'image'       => 'hats_3.jpg',
            'slug'        => 'snapback-hat'
        ]);

        Product::create([
            'name'        => 'NYC Snapback',
            'stock'       => 31,
            'price'       => 44.19,
            'description' => 'Outdoor Hat material cotton Original',
            'image'       => 'hats_4.jpg',
            'slug'        => 'snapback-hat'
        ]);

        Product::create([
            'name'        => '3D Ocean Snapback',
            'stock'       => 23,
            'price'       => 45.43,
            'description' => 'Outdoor Hat material cotton Original',
            'image'       => 'hats_5.jpg',
            'slug'        => 'snapback-hat'
        ]);
    }
}
