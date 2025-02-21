<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $seller = User::where('role', 'seller')->first();

            // Добавляем компанию для продавца
            Company::create([
                'name' => 'Company One',
                'user_id' => $seller->id,  // Привязка к продавцу
                'is_active' => true,
            ]);
        }
    }
}
