<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable=[
        'professor_photo',
        'professor_name',
        'professor_title',
        'text1',
        'textstrong',
        'text2',
        'phone',
        'email',
        'skype_id',
        'facebook_id',
        'twitter_id',
        'dribble_id',
        'linkedin_id',
        'fixed',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
