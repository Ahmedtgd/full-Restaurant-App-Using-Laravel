<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected  $fillable=['name','email','password','phone','address'];
  //or
  //protected $table='customers'; //if it doesn't has the same table name with smale litter in the piginng and S in the end


/*
  protected $table='cards';
  public function cards(){
    return $this->hasOne('App\Card');
  }
*/
}
