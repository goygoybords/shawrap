<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PayType;

class PayTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pay_type = [
            ['id' => 1, 'pay_type' => 'Cash'],
            ['id' => 2, 'pay_type' => 'Check'],
            ['id' => 3, 'pay_type' => 'Credit Card'],
            ['id' => 4, 'pay_type' => 'Gift Certificate'],
            ['id' => 7, 'pay_type' => 'Exchange'],
            ['id' => 8, 'pay_type' => 'Rewards'],
            ['id' => 11, 'pay_type' => 'Charge'],
            ['id' => 12, 'pay_type' => 'Others'],
        ];

        foreach ($pay_type as $type)
            PayType::create($type);
    }
}
