<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $table = 'reservations';
    protected $fillable = [
        'name',
        'date',
        'location_num',


    ];
}


