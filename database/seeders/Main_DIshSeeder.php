<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Main_Dish;
class Main_DIshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Main_Dish::create([
            'name' => 'Chicken Pasta  ',
            'description' => 'Pasta with paprica chicken and nut sauce.',
            'price' => '27'

        ]);

        Main_Dish::create([
            'name' => 'Pork and baked potatoes ',
            'description' => 'Pork with chilly sauce, nuts and baked potatoes with feta and soy.',
            'price' => '22'

        ]);


    }
}
