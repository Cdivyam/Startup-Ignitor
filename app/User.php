<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','sellist',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function stakeholder(){
        return $this->hasMany('App\StakeHolder');
    }

    public function mentor(){
        return $this->hasMany('App\Mentor');
    }

    public function mentee(){
        return $this->hasMany('App\Mentee');
    }
    
}
