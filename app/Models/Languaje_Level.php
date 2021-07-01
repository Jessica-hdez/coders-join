<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languaje_Level extends Model
{
    use HasFactory;

    public function languaje(){
        return $this->belongsTo(Languaje::class);
    }
}
