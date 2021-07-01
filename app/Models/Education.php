<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
