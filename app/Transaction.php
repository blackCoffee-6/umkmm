<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'date'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
