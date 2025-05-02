<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('operations')->insert([
            [
                'renter_id' => 1,
                'operation_type' => 'Пополнение',
                'amount' => 10000.00,
                'description' => 'Пополнение баланса через терминал',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'renter_id' => 2,
                'operation_type' => 'Оплата аренды',
                'amount' => -5000.00,
                'description' => 'Оплата аренды автомобиля ID 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'renter_id' => 3,
                'operation_type' => 'Штраф',
                'amount' => -2000.00,
                'description' => 'Штраф за превышение скорости',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
