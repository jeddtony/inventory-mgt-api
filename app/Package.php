<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    /**
     * Relationship with Shipment
     * 
     * @return Shipment
     */
    public function shipment(){
        return $this->belongsTo('App\Shipment');
    }
}
