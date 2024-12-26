<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            ['name' => 'Hair Rebond', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hair Styling', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hair Coloring', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Make-Up', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
