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

        Item::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone',
            'price' => 699.99,
            'quantity' => 25,
            'category_id' => 1,
            'supplier_id' => 1,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Jeans',
            'description' => 'Denim jeans',
            'price' => 49.99,
            'quantity' => 40,
            'category_id' => 2,
            'supplier_id' => 2,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Blender',
            'description' => 'Kitchen blender',
            'price' => 59.99,
            'quantity' => 15,
            'category_id' => 3,
            'supplier_id' => 3,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Novel',
            'description' => 'Bestselling novel',
            'price' => 14.99,
            'quantity' => 60,
            'category_id' => 4,
            'supplier_id' => 4,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Basketball',
            'description' => 'Official size basketball',
            'price' => 29.99,
            'quantity' => 35,
            'category_id' => 5,
            'supplier_id' => 5,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Action Figure',
            'description' => 'Collectible action figure',
            'price' => 24.99,
            'quantity' => 45,
            'category_id' => 6,
            'supplier_id' => 6,
            'created_by' => 1
        ]);

        Item::create([
            'name' => 'Lipstick',
            'description' => 'Matte finish lipstick',
            'price' => 9.99,
            'quantity' => 70,
            'category_id' => 7,
            'supplier_id' => 7,
            'created_by' => 1
        ]);
    }
}