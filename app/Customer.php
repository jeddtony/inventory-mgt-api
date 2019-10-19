<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    /**
     * Relationship with invoice
     * 
     * @return Invoice
     */
    public function invoices() 
    {
        return $this->hasMany('App\Invoice');
    }

    /**
     * Relationship with salesOrder
     * 
     * @return SalesOrder
     */
    public function salesorders()
    {
        return $this->hasMany('App\Salesorder');
    }
}
