<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    public $table = 'email';
    protected $fillable = [
        'to',
        'subject',
        'body',
        'headers'

    ];

}
