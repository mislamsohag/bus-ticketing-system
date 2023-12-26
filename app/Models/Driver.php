<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation',
        'licenseNumber'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function profile(){
        return $this->belongsTo(Profile::class);
    }
}
