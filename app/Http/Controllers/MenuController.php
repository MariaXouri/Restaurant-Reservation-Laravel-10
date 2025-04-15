<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appetizer;
use App\Models\Drink;
use App\Models\User;
use App\Models\Main_Dish;
use App\Models\Salad;
use App\Models\Reservation;
use App\Models\Pud;

class MenuController extends Controller
{
    public function getMenu()
    {
        $salad = Salad::select('name', 'description', 'price')->get();
        $drink = Drink::select('name', 'description', 'price')->get();
        $appetizer = Appetizer::select('name', 'description', 'price')->get();
        $main_dish = Main_Dish::select('name', 'description', 'price')->get();
        $pud = Pud::select('name', 'description', 'price')->get();


        return response()->json(['salad' => $salad, 'drink' => $drink, 'appetizer' => $appetizer, 'main_dish' => $main_dish, 'pud' => $pud]);


    }
}
