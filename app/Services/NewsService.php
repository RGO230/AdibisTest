<?php

namespace App\Services;

use App\Repositories\NewsRepository;
use Illuminate\Database\Eloquent\Model;

class NewsService
{
    public function __construct(
        private NewsRepository $repository
    ) {}

    public function show(int $id, ?string $cursor = null): Model
    {
        return $this->repository->show($id, $cursor);
    }

    public function create(array $data): Model
    {
        return $this->repository->create($data);
    }
}
