<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Продавец
        User::create([
            'name' => 'Seller One',
            'email' => 'seller@example.com',
            'password' => bcrypt('password'),
            'role' => 'seller',
        ]);

        // Клиент
        User::create([
            'name' => 'Client One',
            'email' => 'client@example.com',
            'password' => bcrypt('password'),
            'role' => 'client',
        ]);
    }
}
