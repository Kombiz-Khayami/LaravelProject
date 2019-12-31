<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $fillable = [
        'content',
        'title',
        'user_id',
        'published'
    ];
}
