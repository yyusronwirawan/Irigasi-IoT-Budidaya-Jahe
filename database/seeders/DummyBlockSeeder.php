<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blockData = [
            [
                'block' => 'A',
            ],
            [
                'block' => 'B',
            ],
            [
                'block' => 'C',
            ],
            [
                'block' => 'D',
            ],
        ];

        foreach($blockData as $val) {
            Block::create($val);
        }
    }
}