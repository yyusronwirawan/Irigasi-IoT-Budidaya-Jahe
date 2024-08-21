<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin Jahe',
                'username' => 'adminjahe',
                'role' => 'admin',
                'password' => bcrypt('akucintabalittro')
            ],
            [
                'name' => 'Public',
                'username' => 'userpublic',
                'role' => 'public',
                'password' => bcrypt('jahejaya')
            ]
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}