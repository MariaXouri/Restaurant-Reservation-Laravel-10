<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appetizer;
class AppetizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appetizer::create([
            'name' => 'Pork Soup',
            'description' => 'Soup made with pork, tomatos and choritho. ',
            'price' => '22'

        ]);

        Appetizer::create([
            'name' => 'Spinach Pie',
            'description' => 'Spinach pie with feta, tomatos and onions. ',
            'price' => '20'

        ]);

    }
}

