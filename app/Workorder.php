<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    //Table name
    protected $table = 'workorders';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
