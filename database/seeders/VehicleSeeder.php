<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'manufacturer_id' => 1,
                'brand_id' => 1,
                'car_model_id' => 1,
                'color'=>'black',
                'year' => 2024,
            ],
            [
                'manufacturer_id' => 2,
                'brand_id' => 2,
                'car_model_id' => 2,
                'color'=>'blue',
                'year' => 2023,
            ],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}
