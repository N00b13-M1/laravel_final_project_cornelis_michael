<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable= [
        'img',
        'created_when',
        'posted_by',
        'number_of_comments',
        'title',
        'text1',
        'strong',
        'text2',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
}

