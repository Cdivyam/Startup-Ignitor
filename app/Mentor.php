<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    //Table
    protected $table = 'mentor';
    //Primary key
    public $primaryKey = 'id';
    //TimeStamps

    protected $fillable = [
        'name', 'prefered_stage', 'ministry', 'department','industry','sector','city','state','experience','about','image',
    ];

    public function data() {
        return $this->hasMany('App\DataRepository');
    }
}
