<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Family nutrition', 'image' => 'category/Family nutrition.jpg'],
            ['name' => 'Water', 'image' => 'category/Water.jpg'],
            ['name' => 'Cereals', 'image' => 'category/Cereals.jpg'],
            ['name' => 'Chocolate & confectionery', 'image' => 'category/Chocolate & confectionery.jpg'],
            ['name' => 'Coffee', 'image' => 'category/Coffee.jpg'],
            ['name' => 'Culinary, chilled & frozen food', 'image' => 'category/Culinary, chilled & frozen food.jpg'],
            ['name' => 'Dairy', 'image' => 'category/Dairy.jpg'],
            ['name' => 'Drinks', 'image' => 'category/Drinks.jpg'],
            ['name' => 'Food service', 'image' => 'category/Food service.jpg'],
            ['name' => 'Healthcare nutrition', 'image' => 'category/Healthcare nutrition.jpg'],
            ['name' => 'Ice cream', 'image' => 'category/Ice cream.jpg'],
            ['name' => 'Petcare', 'image' => 'category/Petcare.jpg'],
        ];

        foreach ($categories as $category) {
            DB::table('category')->insert([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'image' => $category['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
