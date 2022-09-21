<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Laptops', 'Phones', 'Tablets', 'iPods', 'Watches', 'TVs', 'AirPods', 'HomePods', 'Surface', 'Windows Phone'];

        foreach($categories as $category) {
            Category::create([
                'name' => $category,
                'description' => fake()->text()
            ]);
        }
    }
}
