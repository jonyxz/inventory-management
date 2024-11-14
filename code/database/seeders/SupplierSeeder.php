<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'Acme Electronics',
            'contact_info' => '123 Main St, Anytown USA',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'ABC Clothing Co.',
            'contact_info' => '456 Oak Rd, Somewhere City',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'XYZ Home Supplies',
            'contact_info' => '789 Elm Ave, Somewhere Else',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'Book World',
            'contact_info' => '101 Maple St, Booktown',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'Sports Gear Inc.',
            'contact_info' => '202 Pine St, Sportstown',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'Toy Universe',
            'contact_info' => '303 Cedar St, Toyland',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'Beauty Essentials',
            'contact_info' => '404 Birch St, Beautytown',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'Auto Parts Depot',
            'contact_info' => '505 Spruce St, Autoville',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'Garden Supplies Co.',
            'contact_info' => '606 Willow St, Gardenville',
            'created_by' => 1
        ]);

        Supplier::create([
            'name' => 'Health Products Ltd.',
            'contact_info' => '707 Fir St, Healthcity',
            'created_by' => 1
        ]);
    }
}