<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository extends BaseContentRepository
{
    public function __construct()
    {
        $this->setModel(Post::class);
    }
}
