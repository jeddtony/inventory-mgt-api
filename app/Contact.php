<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
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
}
