<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterRequest extends Model
{
    use HasFactory;

    protected $fillable = ['themes', 'cities'];

    protected $casts = [
        'themes' => 'array',
        'cities' => 'array',
    ];
}
