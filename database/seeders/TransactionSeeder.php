<?php

namespace Database\Seeders;
use App\Models\Transaction;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'category_id' => 1,
            'amount' => 150.00,
            'description' => 'Compras no mercado',
            'transaction_date' => now()
        ]);
    
        Transaction::create([
            'category_id' => 2,
            'amount' => 50.00,
            'description' => 'Passagem de ônibus',
            'transaction_date' => now()
        ]);
    }
}
