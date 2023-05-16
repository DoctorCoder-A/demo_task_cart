<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

         for ($i=1;$i<=10;$i++){
             Category::create([
                 'title' => fake()->streetName
             ]);

             Category::create([
                 'title' => fake()->streetName,
                 'sub_category_id' => Category::get()->random()->id
             ]);
         }

        for($i=1;$i<=10;$i++){
            Product::create([
                'name' => fake()->colorName,
                'price' => fake()->numberBetween(50, 1000),
                'category_id' => Category::get()->random()->id,
            ]);
        }
        for($i=1;$i<=5;$i++){
            Cart::create([
                'product_id' => Product::get()->random()->id,
                'user_id' => User::first()->id,
            ]);
        }
    }
}
