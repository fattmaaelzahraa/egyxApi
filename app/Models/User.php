<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo_path',
        'email_verified_at'


    ];
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $appends = [
        'profile_photo_url',
    ];


    public function getProfilePhotoUrlAttribute(): string
    {
        return $this->profile_photo_path ? url('storage/' . $this->profile_photo_path) : '';
    }


    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class,'user_id');
    }
    public function detects_monuments(): BelongsToMany
    {
        return $this->belongsToMany(Monument::class,'detects');
    }
    public function visits_places(): BelongsToMany
    {
        return $this->belongsToMany(Place::class,'visits');
    }
    public function posts_products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'posts');
    }
    public function views_products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'views');
    }
    public function user_review(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function ReadLater(): BelongsToMany
    {
        return $this->belongsToMany(Monument::class, 'detects')
            ->withPivot('ReadLater');
    }


    public function likedPlaces(): BelongsToMany
    {
        return $this->belongsToMany(Place::class, 'visits')
            ->wherePivot('favourite', true);
    }
}
