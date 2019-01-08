<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  //protected  $fillable=['quantity','status'];
  //or
  protected $table='cards'; //if it doesn't has the same table name with smale litter in the piginng and S in the end

/*  protected $table='products';
  public function products(){
    return $this->belongsTo('App\Product');
  }
  */
}
