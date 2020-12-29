<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }
}
