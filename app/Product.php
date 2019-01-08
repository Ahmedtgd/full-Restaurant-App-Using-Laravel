<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //protected  $fillable=['name','description','price','file'];
  //or
  protected $table='products';// if it doesn't has the same table name with smale litter in the piginng and S in the end

/*  protected $table='orders';
  public function orders(){
    return $this->hasMany('App\Order');
  }
*//*
protected $table='cards';
public function cards(){
  return $this->hasMany('App\Card');
}
*/

}
