<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table="users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'gender',
        'dateOfBirth',
        'password'
    ];

    function admin(){
        return $this->hasOne(Admin::class);
    }

    function profile(){
        return $this->hasOne(Profile::class);
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
