<?php

namespace App;
use Eloquent;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'id_user', 'product_name', 'description', 'price', 'variant', 'photo_product', 'stock', 'purchase', 'viewer',
    ];
    public function cart(){
        return $this->hasMany('App\Cart');
    }
    
}
