<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCuisineController extends Controller
{
    public function getOurCuisine()
    {
        $text1 = " Our cuisine was founded by Nikos Papadopoulos, an experienced chef coming from Sifnos. We create tasty and colorful menus. Our cuisine uses recipes that match each season of the year. Our chef is Nikos Papadopoulos.";
        $location = "Our location is in Papadopoulou 10";
        $phone = "+306983848500, localcuisine@gmail.com";



        return response()->json(['text1' => $text1, 'location' => $location, 'phone' => $phone]);
    }


}
