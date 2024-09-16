<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $discounts = [
            ['discount' => 'Zero Discount', 'discount_rate' => 0.00],
            ['discount' => 'Variable Discount', 'discount_rate' => 0.00],
            ['discount' => 'Senior Citizen Discount', 'discount_rate' => 20.00],
            ['discount' => 'PWD', 'discount_rate' => 20.00],
            ['discount' => '25% Discount', 'discount_rate' => 25.00],
            ['discount' => '5% Discount', 'discount_rate' => 5.00],
            ['discount' => '20% Discount', 'discount_rate' => 20.00],
        ];

        foreach ($discounts as $discount)
        {
            Discount::create([
                'discount' => $discount['discount'],
                'discount_rate' => $discount['discount_rate'],
                'is_date_scheduled' => 0,
                'date_start' => null,
                'date_end' => null,
                'is_time_scheduled' => 0,
                'time_start' => null,
                'time_end' => null,
                'day_mon' => 0,
                'day_tue' => 0,
                'day_wed' => 0,
                'day_thu' => 0,
                'day_fri' => 0,
                'day_sat' => 0,
                'day_sun' => 0,
            ]);
        }
    }
}
