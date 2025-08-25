<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'author',
        'publishedAt',
        'tags',
        'imageUrl',
    ];

    protected $casts = [
        'publishedAt' => 'datetime',
        'tags' => 'array',
    ];

    protected $dates = [
        'publishedAt',
    ];
}
