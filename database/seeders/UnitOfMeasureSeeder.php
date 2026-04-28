<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitOfMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units_of_measure')->insert([
            [
                'name' => 'Kilogram',
                'abbreviation' => 'KG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Liter',
                'abbreviation' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Metric Ton',
                'abbreviation' => 'TON',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bag',
                'abbreviation' => 'BAG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
