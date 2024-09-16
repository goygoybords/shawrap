<?php

namespace Database\Seeders;

use App\Models\Terms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terms = [
            ['term' => '15 days', 'number_of_days' => 15],
            ['term' => '30 days', 'number_of_days' => 30],
            ['term' => '60 days', 'number_of_days' => 60],
            ['term' => '90 days', 'number_of_days' => 90],
            ['term' => '120 days', 'number_of_days' => 120],
            ['term' => 'COD', 'number_of_days' => 0],
        ];


        foreach ($terms as $term)
            Terms::create($term);
    }
}
