<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;

interface ContentRepositoryContract
{
    public function show(int $id, ?string $cursor = null): ?Model;

    public function create(array $data): Model;
}
