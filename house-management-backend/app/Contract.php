<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['serialnumber', 'address', 'landholder', 'renter', 'price', 'rent_start', 'rent_end'];
}

