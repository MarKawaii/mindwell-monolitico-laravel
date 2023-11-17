<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Ignacio Veliz',
            'email' => 'ignacio.veliz@mindwell.cl',
            'google_id' => 'google_id_123',
            'photo' => '',
            'email_verified_at' => now(),
            'password' => Hash::make('123123123'),
            'status' => true,
        ]);

        User::create([
            'name' => 'Diego Arancibia',
            'email' => 'diago.arancibia@mindwell.cl',
            'google_id' => 'google_id_456',
            'photo' => '',
            'email_verified_at' => now(),
            'password' => Hash::make('123123123'),
            'status' => true,
        ]);
    }
}
