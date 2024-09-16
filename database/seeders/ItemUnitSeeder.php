<?php

namespace Database\Seeders;

use App\Models\ItemUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            'Pcs', 'Box(s)', 'Pack(s)', 'Can(s)', 'Gallon(s)', 'Gram(s)', 'Kg(s)', 
            'Liter(s)', 'Order(s)', 'Roll(s)', 'Sachet(s)', 'Serving(s)', 'Batch(s)', 
            'Bar(s)', 'Case(s)', 'Container(s)', 'Unit(s)', 'Bag(s)', 'Bdft', 'Bott(s)', 
            'Ft', 'Hundred(s)', 'Inch(s)', 'Kit(s)', 'Mtr(s)', 'Pad(s)', 'Pail(s)', 
            'Pair(s)', 'Peso', 'Pint(s)', 'Quart(s)', 'Ream(s)', 'Sack(s)', 'Set', 
            'Sheet(s)', 'SmallBox(s)', 'Tank(s)', 'Trip(s)', 'Cup(s)', 'Gross'
        ];

        foreach ($units as $unit)
        {
            ItemUnit::create([
                'unit' => $unit
            ]);
        }
    }
}
