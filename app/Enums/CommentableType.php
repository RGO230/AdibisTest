<?php

namespace App\Enums;

enum CommentableType: string
{
    case Post = 'post';
    case News = 'news';
    case Comment = 'comment';
}

