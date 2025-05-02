<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rental_histories')->insert([
            [
                'renter_id' => 1,
                'vehicle_id' => 1,
                'start_date' => Carbon::now()->subDays(5),
                'end_date' => Carbon::now()->subDays(2),
                'status' => 'завершена',
                'total_cost' => 15000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'renter_id' => 1,
                'vehicle_id' => 2,
                'start_date' => Carbon::now()->subDay(),
                'end_date' => null,
                'status' => 'взята',
                'total_cost' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'renter_id' => 2,
                'vehicle_id' => 1,
                'start_date' => Carbon::now()->subDays(10),
                'end_date' => Carbon::now()->subDays(4),
                'status' => 'завершена',
                'total_cost' => 20000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
