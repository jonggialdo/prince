<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   protected $fillable = [
    'id','id_user','id_product','qnt','subtotal',
   ];
   public function seller(){
   	return $this->belongsTo('App\User','id_seller');
   }
   public function buyer(){
    return $this->belongsTo('App\User','id_user');
}
   public function product(){
   	return $this->belongsTo('App\Product','id_product');
   }
}
