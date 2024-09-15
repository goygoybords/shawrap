<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user_type = [
            ['id' => 1, 'description' => 'Admin'],
            ['id' => 2, 'description' => 'Sales'],
            ['id' => 3, 'description' => 'Purchasing'],
            ['id' => 4, 'description' => 'Accounting'],
        ];

        foreach ($user_type as $type)
            UserType::create($type);
        
    }
}
