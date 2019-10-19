<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchaseorder extends Model
{
    //
    /**
     * Relationship with Vendor
     * 
     * @return Vendor
     */
    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }
}
