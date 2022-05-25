<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable= [
        'url',
        'img',
        'created_when',
        'posted_by',
        'number_of_comments',
        'title',
        'text1',
        'text2',
    ];
}
