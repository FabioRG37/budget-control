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
            'budgeted_amount' => 500.00,
            'year' => date("Y")
        ]);
    }
}
