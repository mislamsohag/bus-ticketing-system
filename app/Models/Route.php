<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'routeName',
        'routeStart',
        'routeEnd',
        'ticketPrice',
    ];

    function bus(){
        return $this->hasMany(Bus::class);
    }

    function schedule(){
        return $this->hasOne(Schedule::class);
    }
    function booking(){
        return $this->hasMany(Booking::class);
    }

    function ticket(){
        return $this->hasMany(Ticket::class);
    }
}
