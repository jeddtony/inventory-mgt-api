<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    /**
     * Relationship with PurchaseOrder
     * 
     * @return Purchaseorder
     */
    public function purchaseorder()
    {
        return $this->hasMany('App\Purchaseorder');
    }
}
