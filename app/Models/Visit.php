<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'place_id',
        'rate',
        'favourite'
    ];
    protected $primaryKey = ['user_id', 'place_id'];
    public $incrementing = false;
    public $timestamps = false;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }

}
