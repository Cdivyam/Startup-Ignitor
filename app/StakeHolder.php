<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StakeHolder extends Model
{
    //Table
    protected $table = 'stakeholders';
    //Primary key
    public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User', 'foreign key', 'user_id');
    }
    
}
