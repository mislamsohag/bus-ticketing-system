<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class);
    }
    function profile(){
        return $this->belongsTo(Profile::class);
    }
    function booking(){
        return $this->hasMany(Booking::class);
    }
    function ticket(){
        return $this->hasMany(Ticket::class);
    }
}
