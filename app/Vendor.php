<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function kota()
    {
        return $this->belongsTo('App\Kota');
    }

    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }
}
