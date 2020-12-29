<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{

    public function vendor()
    {
        return $this->hasOne('App\Vendor');
    }
}
