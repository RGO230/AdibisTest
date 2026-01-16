<?php

namespace App\Services;

use App\Repositories\CommentRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CommentService
{
    public function __construct(
        private CommentRepository $repository
    ) {}

    public function show(int $id): Model
    {
        return $this->repository->show($id);
    }

    public function create(array $data): Model
    {
        $data['commentable_type'] = 'App\\Models\\' . ucfirst($data['commentable_type']);
        $data['user_id'] = Auth::id();

        return $this->repository->create($data);
    }

    public function update(int $id, array $data): Model
    {
        $this->repository->update($id, $data);
        return $this->repository->show($id);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }
}

