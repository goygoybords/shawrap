<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Kevin',
            'lastname' => 'Kho',
            'username' => 'administrator',
            'password' => Hash::make('admin12345'),
            'user_type' => 1,
            'remember_token' => NULL,
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 1,
        ]);
    }
}
