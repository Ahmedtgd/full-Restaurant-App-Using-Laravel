<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //protected  $fillable=['status','vechicle_number'];
    //or
    protected $table='vehicles';
/*
    protected $table='users';
    public function users(){
      return $this->belongsTo('App\User');
    }
*/


}
