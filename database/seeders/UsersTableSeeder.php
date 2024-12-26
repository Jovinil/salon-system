<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'full_name' => 'John Doe',
                'contact_number' => '09123456789',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            'full_name' => 'John Doe',
            'contact_number' => '09123456789',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ]
        ]);
    }
}
