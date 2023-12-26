<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'travelDate'
    ];

    function passenger(){
        return $this->belongsTo(Passenger::class);
    }
    function route(){
        return $this->belongsTo(Route::class);
    }
}
