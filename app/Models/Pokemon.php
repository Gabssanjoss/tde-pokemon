<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pokemon extends Model
{
    
    protected $fillable = [
        'name',
        'coach_id',
        'type',
        'strenght',
        'image'
    ];

    public function coach(): BelongsTo {

        return $this->belongsTo(Coach::class, 'coach_id');

    }


}
