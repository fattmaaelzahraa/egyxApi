<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wish extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'wishlist'
    ];

    protected $primaryKey = 'id';


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    public function wishes(): HasMany
    {
        return $this->hasMany(Wish::class);
    }


}
