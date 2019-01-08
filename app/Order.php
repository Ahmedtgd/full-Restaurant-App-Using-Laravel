<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected  $fillable=['orderDate','quantity','deliveryStatus','vehicle'];
  //or
  //protected $table='orders'; if it doesn't has the same table name with smale litter in the piginng and S in the end
  /*protected $table='products';
  public function product(){
    return $this->belongsTo('App\Product');
  }
*/









}
