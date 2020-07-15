<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Table name
    protected $table = 'bookings';

    protected $fillable = ['user_id','flight_id'];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function flight(){
        return $this->hasMany('App\Flight');
    }
}
