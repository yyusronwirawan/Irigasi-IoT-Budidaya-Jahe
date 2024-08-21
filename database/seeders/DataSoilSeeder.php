<?php

namespace Database\Seeders;

use App\Models\DataSoil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSoilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataSoil::factory()->count(50)->create();
    }
}