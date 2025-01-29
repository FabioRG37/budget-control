<?php

namespace Database\Seeders;
use App\Models\Budget;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Budget::create([
            'category_id' => 1,
            'limit' => 500.00,
            'month' => '2025-01'
        ]);
    }
}
