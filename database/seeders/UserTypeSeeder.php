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
            ['id' => 1, 'type' => 'Administrator'],
            ['id' => 2, 'type' => 'Sales'],
            ['id' => 3, 'type' => 'Purchasing'],
            ['id' => 4, 'type' => 'Accounting'],
        ];

        foreach ($user_type as $type)
            UserType::create($type);
        
    }
}
