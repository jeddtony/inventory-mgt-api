<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    //
    /**
     * Relationshp with Package
     * 
     * @return Package
     */
    public function packages()
    {
        return $this->hasMany('App\Package');
    }
}
