<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'bg',
        'teacher_pic',
        'bg_2',
        'bg_3',
        'bg_4',
        'teacher_name',
        'price_class',
        'price',
        'text',
        'starting_date',
        'months',
        'weeks',
        'study_level',
        'discipline',
        'favorite',
    ];

    protected $guarded = ['id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

