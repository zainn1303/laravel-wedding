<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    // Allow to mass assigment to all field;
    protected $guarded = [];

    public function vendor()
    {
        return $this->hasOne('App\Vendor');
    }
}
