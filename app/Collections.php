<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    protected $fillable = [
        'CardID',
        'UserID',
        'Quantity'
    ];
}
