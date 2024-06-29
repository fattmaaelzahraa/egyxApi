<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detect extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'monument_id',
        'ReadLater'
    ];

    public $timestamps = false;
    protected $primaryKey = ['user_id', 'monument_id'];
    public $incrementing = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function monument(): BelongsTo
    {
        return $this->belongsTo(Monument::class);
    }

}
