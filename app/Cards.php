<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    
    protected $fillable = [
        'APIid',
        'Name',
        'CMC',
        'Foil',
        'Promo',
        'Image'
    ];
}
