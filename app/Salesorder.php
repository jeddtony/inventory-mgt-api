<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesorder extends Model
{
    //
    /**
     * Relationship with Item model
     * 
     * @return Item
     */
    public function items()
    {
        return $this->belongsToMany('App\Items');
    }

    /**
     * Relationship with Customer
     * 
     * @return Customer
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    /**
     * Relationship with packages
     * 
     * @return Package
     */
    public function package()
    {
        return $this->belongsTo('App\Package');    
    }
}
