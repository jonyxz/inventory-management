<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic devices and accessories',
            'created_by' => 1
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'Apparel and accessories',
            'created_by' => 2
        ]);

        Category::create([
            'name' => 'Home Goods',
            'description' => 'Household items and decor',
            'created_by' => 3
        ]);

        Category::create([
            'name' => 'Books',
            'description' => 'Books and literature',
            'created_by' => 2
        ]);

        Category::create([
            'name' => 'Sports',
            'description' => 'Sports equipment and apparel',
            'created_by' => 3
        ]);

        Category::create([
            'name' => 'Toys',
            'description' => 'Toys and games for children',
            'created_by' => 4
        ]);

        Category::create([
            'name' => 'Beauty',
            'description' => 'Beauty products and cosmetics',
            'created_by' => 4
        ]);

        Category::create([
            'name' => 'Automotive',
            'description' => 'Automotive parts and accessories',
            'created_by' => 1
        ]);

        Category::create([
            'name' => 'Health',
            'description' => 'Health and wellness products',
            'created_by' => 3
        ]);
    }
}