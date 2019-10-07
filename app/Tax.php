<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    //
    /**
     * Relationship with Item
     * 
     * @return Item
     */
    public function Items()
    {
        return $this->hasMany('App\Items');
    }
}
