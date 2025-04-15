<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Drink::create([
            'name' => 'Water',
            'description' => 'Bottled Water',
            'price' => '1.5'

        ]);

        Drink::create([
            'name' => 'Red Wine (dry) Noema',
            'description' => 'The true meaning behind Noima is to produce a wine of unparallel quality that rivals the best examples all over the world. Breathtaking complexity, high alcohol and persistent finish are among its impressive characteristics.',
            'price' => '75'

        ]);

        Drink::create([
            'name' => 'White Wine (dry) Pure Santorini',
            'description' => 'A new Santorini, that actually travels us to the island, capturing all the special features of this charismatic place . From a variety that has huge potential and it takes a while to unfold.',
            'price' => '53'

        ]);


    }
}
