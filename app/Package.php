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

    /**
     * Relationship with Salesorder
     * 
     * @return Salesorder
     */
    public function salesorder(){
        return $this->hasMany('App\Salesorder');
    }
}
