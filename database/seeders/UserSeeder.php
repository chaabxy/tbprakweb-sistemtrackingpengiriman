<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminkelompok6'),
            'role_id' => 1, // admin
            'no_hp' => '08123456789',
            'alamat' => 'Alamat Admin',
        ]);

        // Supir
        User::create([
            'name' => 'Supir',
            'email' => 'supir@gmail.com',
            'password' => Hash::make('supirkelompok6'),
            'role_id' => 2, // supir
            'no_hp' => '08234567890',
            'alamat' => 'Alamat Supir',
        ]);

        // Pengguna
        User::create([
            'name' => 'Pengguna',
            'email' => 'pengguna@gmail.com',
            'password' => Hash::make('penggunakelompok6'),
            'role_id' => 3, // pengguna
            'no_hp' => '08345678901',
            'alamat' => 'Alamat Pengguna',
        ]);
    }
}
