<?php

namespace App\Models;

class News extends BaseCommentableModel
{
    protected $fillable = [
        'title',
        'description',
    ];
}
