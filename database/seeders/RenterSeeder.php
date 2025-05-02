<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('renters')->insert([
            [
                'user_id' => 1,
                'phone' => '+37491123456',
                'passport_number' => 'AB1234567',
                'address' => 'Yerevan, Armenia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'phone' => '+37499111222',
                'passport_number' => 'CD7654321',
                'address' => 'Gyumri, Armenia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'phone' => '+37499111223',
                'passport_number' => 'CD76543213',
                'address' => 'Gyumri, Armenia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
