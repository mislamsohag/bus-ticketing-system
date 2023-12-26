<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'busName',
        'busType',
        'totalSeat',
        'busNumber'
    ];

    function route(){
        return $this->belongsTo(Route::class);
    }
}
