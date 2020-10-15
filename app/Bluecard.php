<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bluecard extends Model
{
    //Table Name
    public $table = 'bluecards';


    // Primary Key
    public $primaryKey = 'id';
    // public $incrementing = false;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
