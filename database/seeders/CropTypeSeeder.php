<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CropTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crop_types')->insert([
            ['name' => 'Soybean', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corn', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wheat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cotton', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rice', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
