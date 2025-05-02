<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toyotaId = DB::table('manufacturers')->where('name', 'Toyota')->value('id');
        $bmwId = DB::table('manufacturers')->where('name', 'BMW')->value('id');

        DB::table('brands')->insert([
            ['name' => 'Lexus', 'manufacturer_id' => $toyotaId],
            ['name' => 'Camry', 'manufacturer_id' => $toyotaId],
            ['name' => 'M', 'manufacturer_id' => $bmwId],
        ]);
    }
}
