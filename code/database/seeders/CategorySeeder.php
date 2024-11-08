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
            'created_by' => 1
        ]);

        Category::create([
            'name' => 'Home Goods',
            'description' => 'Household items and décor',
            'created_by' => 1
        ]);
    }
}