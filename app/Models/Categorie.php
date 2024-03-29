<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable= [
        'category_desc',

    ];
    public function news()
    {
        return $this->belongsToMany(News::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}

