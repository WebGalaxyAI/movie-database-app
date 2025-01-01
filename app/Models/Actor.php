<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    protected $guarded = [];

    protected $casts = [
        'also_known_as' => 'array',
        'popularity' => 'float',
        'birthday' => 'date',
        'gender' => 'integer',
        'profile_path' => 'string',
    ];

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'movie_actor')
            ->withPivot('character', 'cast_id', 'order')
            ->withTimestamps();
    }
}

