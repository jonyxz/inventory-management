<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 999.99,
            'quantity' => 20,
            'category_id' => 1,
            'supplier_id' => 1,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'T-Shirt',
            'description' => 'Cotton t-shirt',
            'price' => 19.99,
            'quantity' => 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Desk Lamp',
            'description' => 'Adjustable desk lamp',
            'price' => 29.99,
            'quantity' => 30,
            'category_id' => 3,
            'supplier_id' => 3,
            'created_by' => 1
        ]);
    }
}