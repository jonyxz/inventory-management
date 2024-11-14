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
            'price' => 15000000,
            'quantity' => 4,
            'category_id' => 1,
            'supplier_id' => 1,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'T-Shirt',
            'description' => 'Cotton t-shirt',
            'price' => 180000,
            'quantity' => 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'created_by' => 2
        ]);

        Item::create([
            'name' => 'Desk Lamp',
            'description' => 'Adjustable desk lamp',
            'price' => 80000,
            'quantity' => 30,
            'category_id' => 3,
            'supplier_id' => 3,
            'created_by' => 3
        ]);

        Item::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone',
            'price' => 5000000,
            'quantity' => 25,
            'category_id' => 1,
            'supplier_id' => 1,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Jeans',
            'description' => 'Denim jeans',
            'price' => 320000,
            'quantity' => 40,
            'category_id' => 2,
            'supplier_id' => 2,
            'created_by' => 2
        ]);

        Item::create([
            'name' => 'Blender',
            'description' => 'Kitchen blender',
            'price' => 150000,
            'quantity' => 4,
            'category_id' => 3,
            'supplier_id' => 3,
            'created_by' => 3
        ]);

        Item::create([
            'name' => 'Novel',
            'description' => 'Bestselling novel',
            'price' => 75000,
            'quantity' => 25,
            'category_id' => 4,
            'supplier_id' => 4,
            'created_by' => 2
        ]);

        Item::create([
            'name' => 'Basketball',
            'description' => 'Official size basketball',
            'price' => 90000,
            'quantity' => 35,
            'category_id' => 5,
            'supplier_id' => 5,
            'created_by' => 3
        ]);

        Item::create([
            'name' => 'Action Figure',
            'description' => 'Collectible action figure',
            'price' => 1500000,
            'quantity' => 2,
            'category_id' => 6,
            'supplier_id' => 6,
            'created_by' => 4
        ]);

        Item::create([
            'name' => 'Lipstick',
            'description' => 'Matte finish lipstick',
            'price' => 100000,
            'quantity' => 15,
            'category_id' => 7,
            'supplier_id' => 7,
            'created_by' => 4
        ]);
    }
}