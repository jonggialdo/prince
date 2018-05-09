<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'id_user', 'product_name', 'description', 'price', 'variant', 'photo_product', 'stock', 'purchase', 'viewer',
    ];    
}
