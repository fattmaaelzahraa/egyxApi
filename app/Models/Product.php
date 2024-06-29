<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute(): string
    {
        return Storage::url($this->image_path);
    }


    /*THE BEGINNING OF RELATIONSHIPS FUNCTIONS */
    public function posts_users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'posts');
    }

    public function views_users(): BelongsToMany
    {

        return $this->belongsToMany(User::class,'views');

    }
    public function posts_review(): HasMany
    {
        return $this->hasMany(Review::class);
    }

}
