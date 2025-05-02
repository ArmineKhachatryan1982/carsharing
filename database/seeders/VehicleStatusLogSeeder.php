<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleStatusLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicle_status_logs')->insert([
            [
                'vehicle_id' => 1,
                'status' => 'rented',
                'location_lat' => 40.1772,
                'location_lng' => 44.5035,
                'speed' => 0,
                'description' => 'Авто выдано арендатору',
            ],
            [
                'vehicle_id' => 2,
                'status' => 'moving',
                'location_lat' => 40.1800,
                'location_lng' => 44.5100,
                'speed' => 45.5,
                'description' => 'Авто в движении по трассе',
            ],
            [
                'vehicle_id' => 3,
                'status' => 'returned',
                'location_lat' => 40.1790,
                'location_lng' => 44.5070,
                'speed' => 0,
                'description' => 'Авто возвращено на базу',
            ]
        ]);
    }
}
