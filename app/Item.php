<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    /**
     * Relationship with tax
     * 
     * @return Tax
     */
    public function tax()
    {
        return $this->belongsTo('App\Tax');
    }
}
