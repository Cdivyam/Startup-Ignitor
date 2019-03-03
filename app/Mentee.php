<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    //Table
    protected $table = 'mentee';
    //Primary key
    public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User', 'foreign key', 'user_id');
    }
}
