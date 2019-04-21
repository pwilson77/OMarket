<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    public function bought()
    {
      return $this->hasMany('App\User', 'seller_id');
    }

    public function received()
    {
      return $this->hasMany('App\User', 'buyer_id');
    }

    public function user()
    {
      
    }

}
