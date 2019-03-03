<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenteeMentor extends Model
{
    //Table
    protected $table = 'mentee_mentors';
    //Primary key
    public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;
    
    public function mentees(){
        return $this->belongsTo('App\Mentee', 'foreign key', 'id');
    }

    public function mentor(){
        return $this->belongsTo('App\Mentor', 'foreign key', 'id');
    }
}
