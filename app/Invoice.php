<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //

    /**
     * Relation with Customer
     * 
     * @return Customer
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}
