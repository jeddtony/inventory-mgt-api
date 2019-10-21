<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomModel extends Model
{
    //

    public $fillable = [
        'name', 'email', 'company_name', 'address', 'city', 'state', 'phone_number',
    ];
}

