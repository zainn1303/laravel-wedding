<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }
}
