<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Place extends Model
{

    use HasFactory;
    protected $fillable = ['name', 'theme', 'city', 'image_path'];
    protected $appends = ['image_url'];
    public function getImageUrlAttribute(): string
    {
        return $this->image_path ? url('images/images/' . $this->image_path) : '';
    }
    public function monuments(): HasMany
    {
        return $this->hasMany(Monument::class,'place_id');
    }
    public function includes_plans(): BelongsToMany
    {
        return $this->belongsToMany(Plan::class,'includes');
    }
    public function visits_users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'visits');
    }
}
