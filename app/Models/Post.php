<?php

namespace App\Models;

class Post extends BaseCommentableModel
{
    protected $fillable = [
        'title',
        'description',
    ];
}
