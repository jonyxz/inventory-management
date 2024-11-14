<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('katasandi'),
            'email' => 'admin@example.com'
        ]);
        Admin::create([
            'username' => 'johan',
            'password' => bcrypt('johan123'),
            'email' => 'johan@gmail.com'
        ]);
        Admin::create([
            'username' => 'Fachrudin',
            'password' => bcrypt('fachrudin123'),
            'email' => 'fachrudin@gmail.com'
        ]);
        Admin::create([
            'username' => 'reza',
            'password' => bcrypt('reza123'),
            'email' => 'reza@gmail.com'
        ]);

    }
}