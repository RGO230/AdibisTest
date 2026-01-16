<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\Contracts\ContentRepositoryContract;
use Illuminate\Database\Eloquent\Model;

class BaseContentRepository implements ContentRepositoryContract
{
    protected Model $model;

    public function show(int $id, ?string $cursor = null): ?Model
    {
        return $this->model::with([
            'comments' => fn($q) => $q
                ->whereNull('parent_id')
                ->with('user', 'children.user')
                ->cursorPaginate(10, ['*'], 'cursor', $cursor)
        ])->findOrFail($id);
    }

    public function create(array $data): Model
    {
        return $this->model::create($data);
    }

    public function setModel(string $modelClass): void
    {
        $this->model = new $modelClass();
    }
}
