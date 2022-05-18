<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable= [
        'bg',
        'title',
        'dropbox',
        'description',
        'url',
        'url_text',
    ];
}
