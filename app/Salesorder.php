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
}
