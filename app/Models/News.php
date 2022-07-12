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

    protected $guarded = ['id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function comments () {

        return $this->hasMany(Comment::class);
    }

    public function user()
	{
		return $this->belongsTo(User::class);
	}
}

