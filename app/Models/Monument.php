<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monument extends Model
{
    use HasFactory;


    /*THE BEGINNING OF RELATIONSHIPS FUNCTIONS */
    public function place(){

        return $this->belongsTo(Place::class);

    }

    public function detects_users(){

        return $this->belongsToMany(User::class,'detects');

    }
}
