<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    
    protected $fillable = [

        'name',
        'type',
        'strenght',
        'image'
        

    ];

}
