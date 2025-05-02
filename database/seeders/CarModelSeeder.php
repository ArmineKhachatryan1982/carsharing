<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lexusId = DB::table('brands')->where('name', 'Lexus')->value('id');
        $camryId = DB::table('brands')->where('name', 'Camry')->value('id');

        DB::table('car_models')->insert([
            ['name' => 'RX 350', 'brand_id' => $lexusId, 'year' => 2020],
            ['name' => 'ES 250', 'brand_id' => $lexusId, 'year' => 2022],
            ['name' => 'LE', 'brand_id' => $camryId, 'year' => 2021],
        ]);
    }
}
