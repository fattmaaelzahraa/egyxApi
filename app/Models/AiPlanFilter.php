<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiPlanFilter extends Model
{
    use HasFactory;

    protected $fillable = ['themes', 'cities', 'duration'];

    protected $casts = [
        'themes' => 'array',
        'cities' => 'array',
    ];
}
