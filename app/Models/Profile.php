<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'mobile',
        'image',
        'city',
        'address'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }

    function employee(){
        return $this->hasOne(Employee::class);
    }
    
    function driver(){
        return $this->hasOne(Driver::class);
    }
    
    function staff(){
        return $this->hasOne(Staff::class);
    }
    
    function passenger(){
        return $this->hasOne(Passenger::class);
    }
    
}
