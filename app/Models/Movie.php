<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    protected $guarded = [];

    protected $casts = [
        'adult' => 'boolean',
        'popularity' => 'float',
        'video' => 'boolean',
        'vote_average' => 'float',
        'vote_count' => 'integer',
        'release_date' => 'date',
    ];

    public function getPosterUrlAttribute(): ?string
    {
        return $this->poster_path
            ? "https://image.tmdb.org/t/p/w500{$this->poster_path}"
            : null;
    }

    public function getBackdropUrlAttribute(): ?string
    {
        return $this->backdrop_path
            ? "https://image.tmdb.org/t/p/w780{$this->backdrop_path}"
            : null;
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class, 'movie_actor')
            ->withPivot('character', 'cast_id', 'order')
            ->withTimestamps();
    }
}
