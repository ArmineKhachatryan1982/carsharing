<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'renter_id' => 1,
                'amount' => 5000.00,
                'type' => 'deposit',
                'description' => 'Пополнение баланса',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'renter_id' => 2,
                'amount' => 2000.00,
                'type' => 'payment',
                'description' => 'Оплата аренды',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
