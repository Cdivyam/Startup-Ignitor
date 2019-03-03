<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    //Table
    protected $table = 'mentees';
    //Primary key
    public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User', 'foreign key', 'user_id');
    }

    public function mentee_mentor(){
        return $this->hasMany('App\MenteeMentor', 'foreign key', 'id');
    }
}
