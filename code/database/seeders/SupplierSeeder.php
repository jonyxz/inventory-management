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
    }
}