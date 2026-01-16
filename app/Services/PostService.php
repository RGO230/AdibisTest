<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Database\Eloquent\Model;

class PostService
{
    public function __construct(
        private PostRepository $repository
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
