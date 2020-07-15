<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    // Table name
    protected $table = 'flights';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function booking(){
        return $this->belongsToMany('App\Booking','flight_id');
    }
}
