<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_options')->insert([
            ['service_id' => 1, 'name' => 'Relax', 'price' => 1500.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 1, 'name' => 'Brazilian Rebond', 'price' => 2000.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 2, 'name' => 'Iron/Curling', 'price' => 350.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 2, 'name' => 'Cutting', 'price' => 100.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 2, 'name' => 'Hair Pinning', 'price' => 450.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 3, 'name' => 'Root Deluxe', 'price' => 1050.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 3, 'name' => 'Full Deluxe', 'price' => 1459.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 3, 'name' => 'Conditioning Deluxe', 'price' => 1450.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 4, 'name' => 'Eye Makeup', 'price' => 600.00, 'created_at' => now(), 'updated_at' => now()],
            ['service_id' => 4, 'name' => 'Full Makeup', 'price' => 800.00, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
