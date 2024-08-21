<?php

namespace Database\Seeders;

use App\Models\Tanaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyTanamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanamanData = [
            [
                'block_id' => 1,
                'kodeTanaman' => 'J',
                'tanaman' => 'Jahira'
            ],
            [
                'block_id' => 1,
                'kodeTanaman' => 'C',
                'tanaman' => 'Cimanggu'
            ],
            [
                'block_id' => 1,
                'kodeTanaman' => 'H',
                'tanaman' => 'Halina'
            ],
            [
                'block_id' => 1,
                'kodeTanaman' => 'J',
                'tanaman' => 'Jahira'
            ],
            [
                'block_id' => 1,
                'kodeTanaman' => 'J',
                'tanaman' => 'Jahira'
            ],
            [
                'block_id' => 1,
                'kodeTanaman' => 'C',
                'tanaman' => 'Cimanggu'
            ],
        ];

        foreach($tanamanData as $val) {
            Tanaman::create($val);
        }
    }
}