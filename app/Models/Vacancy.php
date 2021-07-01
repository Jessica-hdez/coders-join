<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    //con guarded pongo los campos que quiero evitar que se llenen por asignación masiva

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function tecnologies()
    {
        return $this->belongsToMany(Tecnology::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->with('user')
            ->where('status', "Publicar")
            // ->where('id', '!=', $vacancy->id)
            ->latest('id')
            ->take(3)
            ->get();
    }

    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80). "...";
    }
    
}