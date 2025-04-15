<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use Carbon\Carbon;


//use Auth;
class ReservationController extends Controller
{
    public function getreservation(Request $request)
    {
        // $user_1 = $request->user();
        //Data
        $u_id = Auth::user()->id;
        $u_name = Auth::user()->name;
        $u_email = Auth::user()->email;





        return response()->json(['u_id' => $u_id, 'u_name' => $u_name, 'u_email' => $u_email]);

    }

    public function reservationstore(Request $request)
    {

        $date_e = 'Date taken.';

        $reservation = new Reservation;
        $reservation->user_id = Auth::user()->id;
        $reservation->user_email = Auth::user()->email;
        $reservation->name = $request->input('name');
        $date = $reservation->date = $request->date('date');
        $reservation->date->modify('+2 hours');
        $reservation->location_num = $request->input('location_num');


        if (Reservation::where('date', $date)->exists()) {


            return response()->json('Date taken');


        } else {

            $reservation->save();

        }

        $reservation_list = Reservation::select('date', 'name')->get();




        // $reservation->save();

        return response()->json(['reservation' => $reservation, 'reservation_list' => $reservation_list]);

    }






    public function getreserved()
    {

        //$reservation_list = Reservation::select('user_id', 'user_email', 'name', 'date', 'location_num')->get();

        //$reservation_list = Reservation::all()->get();

        $reservation_list = Reservation::select('id', 'date')->get();


        return response()->json(['reservation_list' => $reservation_list]);


    }


}