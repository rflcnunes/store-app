<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            CategorySeeder::class,
        ]);

        Image::factory(10)->create();

        foreach (Image::all() as $image) {
            $image->products()->attach(
                \App\Models\Product::inRandomOrder()->first()
            );
        }

        foreach (\App\Models\Product::all() as $product) {
            $product->categories()->attach(
                \App\Models\Category::inRandomOrder()->first(),
            );

            $product->users()->attach(
                \App\Models\User::inRandomOrder()->first(),
            );
        }

        echo "Database seeded!" . PHP_EOL;
    }
}
