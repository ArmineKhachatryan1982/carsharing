<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(3)->create();
        DB::table('users')->insert([
            ['name' => 'Anja', 'email' => 'anja@gmail.com', 'password' => bcrypt('123456')],
            ['name' => 'Nina', 'email' => 'nina@gmail.com', 'password' => bcrypt('123456')],
            ['name' => 'Anastasia', 'email' => 'anastasia@gmail.com', 'password' => bcrypt('123456')],
        ]);
    }
}
