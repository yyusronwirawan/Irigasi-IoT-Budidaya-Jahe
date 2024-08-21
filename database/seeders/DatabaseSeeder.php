<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manual;
use App\Models\User;
use App\Models\Device;
use App\Models\Schedule;
use App\Models\SoilAction;
use App\Models\StatusManual;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Manual::create([
            'device' => 'HC001',
            'slug' => 'hc001',
            'pompa' => 0,
            'sol_1' => 0,
            'sol_2' => 0,
            'sol_3' => 0,
            'sol_4' => 0
        ]);

        Device::create([
            'name' => 'HC001',
            'slug' => 'hc001'
        ]);

        Device::create([
            'name' => 'HC002',
            'slug' => 'hc002'
        ]);

        // Schedule::create([
        //     'device_id' => 1,
        //     'noJadwal' => 1,
        //     'hari' => 'Senin',
        //     'sol_1' => 1,
        //     'sol_2' => 0,
        //     'sol_3' => 0,
        //     'sol_4' => 0,
        //     'jam' => '06',
        //     'menit' => '10',
        //     'detik' => 0,
        //     'durasiMenit' => '01',
        //     'durasiDetik' => '10',
        //     'status' => 0
        // ]);

        SoilAction::create([
            'sensor1' => "off",
            'sensor2' => "off"
        ]);
    }
}