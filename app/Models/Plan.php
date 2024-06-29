<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'trip_name',
        'start_date',
        'end_date',
        'duration',
        'themes',
        'cities',
        'trip'
    ];


    public function places(): BelongsToMany
    {
        return $this->belongsToMany(Place::class, 'trip_places')->withTimestamps();
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function inculdes_places(): BelongsToMany
    {
        return $this->belongsToMany(Place::class,'includes');
    }

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }
}
