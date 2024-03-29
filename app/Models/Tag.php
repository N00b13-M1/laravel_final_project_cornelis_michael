<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable=[
        'tag_desc',
    ];

    protected $guarded = ['id'];

    public function news()
    {
        return $this->belongsToMany(News::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

}



