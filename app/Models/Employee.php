<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation'
    ];

    function user(){
        return $this->belongsTo(User::class);
    }
    function profile(){
        return $this->belongsTo(Profile::class);
    }


}
