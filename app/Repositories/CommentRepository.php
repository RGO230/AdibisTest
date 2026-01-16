<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Contracts\CommentRepositoryContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CommentRepository implements CommentRepositoryContract
{
    public function get(): Collection
    {
        return Comment::all();
    }

    public function create(array $data): Model
    {
        return Comment::create($data);
    }

    public function show(int $id): Model
    {
        return Comment::with(['user', 'commentable', 'parent', 'children'])->findOrFail($id);
    }

    public function update(int $id, array $data): void
    {
        $comment = Comment::findOrFail($id);
        $comment->update($data);
    }

    public function delete(int $id): bool
    {
        $comment = Comment::findOrFail($id);
        return $comment->delete();
    }
}

