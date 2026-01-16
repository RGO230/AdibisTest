<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface CommentRepositoryContract
{
    public function get(): Collection;

    public function create(array $data): Model;

    public function show(int $id): Model;

    public function update(int $id, array $data): void;

    public function delete(int $id): bool;
}
