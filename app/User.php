<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'student_id', 'role_id', 'userstatus_id', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function laptoprequests() {
        return $this->hasMany("\App\LaptopRequest");
    }

    public function role() {
        return $this->belongsTo("\App\Role");
    }
   
    public function userstatus() {
        return $this->belongsTo("\App\Userstatus");
    }
     
}
