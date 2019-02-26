<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRepository extends Model
{
    //Table
    protected $table = 'data_repository';
    //Primary key
    public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;
}
