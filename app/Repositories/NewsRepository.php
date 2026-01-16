<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository extends BaseContentRepository
{
    public function __construct()
    {
        $this->setModel(News::class);
    }
}
