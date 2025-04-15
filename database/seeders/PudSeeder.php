<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pud;

class PudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pud::create([
            'name' => 'Banana Crepes',
            'description' => 'Crepes with banana,ginger,nuts and chocolate.',
            'price' => '15'

        ]);

        Pud::create([
            'name' => 'Chocolate Pie',
            'description' => 'Pie with chocolate, nuts, ginger.',
            'price' => '15'

        ]);
    }
}
