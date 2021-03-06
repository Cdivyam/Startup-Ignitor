<?php

namespace App;
use App\Notifications\VerifyEmail;
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
        'name', 'email', 'password','sellist','token',
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
    
    public function verified()
    {
        return $this->token === null;
    }
    public function sendVerificationEmail()
    {
        $this->notify(new VerifyEmail($this));
    }
}
