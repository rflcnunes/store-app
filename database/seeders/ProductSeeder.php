<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ['Macbook', 'iPhone', 'iPad', 'iPod', 'Apple Watch', 'Apple TV', 'AirPods', 'HomePod', 'Surface', 'Surface Pro', 'Windows Phone 10'];

        foreach($products as $product) {
            Product::create([
                'name' => $product,
                'description' => fake()->sentence(),
            ]);
        }
    }
}
