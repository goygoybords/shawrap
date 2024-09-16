<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTypeSeeder::class);
        $this->call(PayTypeSeeder::class);
        $this->call(DiscountSeeder::class);
        $this->call(ItemUnitSeeder::class);
        $this->call(TermsSeeder::class);
    }
}
