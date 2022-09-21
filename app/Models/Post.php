<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'author',
        'title',
        'post_img',
        'post_content',
        'post_date'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}



