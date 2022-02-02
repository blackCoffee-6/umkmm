<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactiondetail extends Model
{
    protected $fillable = ['transaction_id', 'product_id', 'quantity'];

    public function transaction()
    {
        return $this->hasOne('App\Transaction', 'id', 'transaction_id');
    }

    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

}
