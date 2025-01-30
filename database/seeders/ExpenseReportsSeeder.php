<?php

namespace Database\Seeders;
use App\Models\ExpenseReports;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExpenseReports::create([
            'category_id' => 1,
            'total_expense' => 200.00,
            'year' => date("Y")
        ]);
    }
}
