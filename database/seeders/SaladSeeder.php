<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salad;
class SaladSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Salad::create([
            'name' => 'Choriatiki Salad ',
            'description' => 'Salad with tomatoes, olives, cucumber, Feta, dry onions and olive oil. ',
            'price' => '12'

        ]);

        Salad::create([
            'name' => 'Nut Salad ',
            'description' => 'Celery Salad with Pine Nuts, Arugula, Feta, and Pita',
            'price' => '15'

        ]);
    }
}
