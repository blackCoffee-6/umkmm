<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['category_id', 'product_id'];

    public function category(){
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    public function product(){
        return $this->hasOne('App\product', 'id', 'product_id');
    }
}
