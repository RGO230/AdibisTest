<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentCreateRequest;
use App\Http\Requests\Comment\CommentShowRequest;
use App\Http\Requests\Comment\CommentUpdateRequest;
use App\Http\Requests\Comment\CommentDeleteRequest;
use App\Http\Resources\Comment\CommentResource;
use App\Services\CommentService;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    public function __construct(
        private CommentService $service
    ) {}

    public function show(int $id, CommentShowRequest $request): CommentResource
    {
        $comment = $this->service->show($id);

        return CommentResource::make($comment);
    }

    public function create(CommentCreateRequest $request): CommentResource
    {
        $comment = $this->service->create($request->validated());

        return CommentResource::make($comment);
    }

    public function update(int $id, CommentUpdateRequest $request): CommentResource
    {
        $comment = $this->service->update($id, $request->validated());

        return CommentResource::make($comment);
    }

    public function delete(int $id, CommentDeleteRequest $request): bool
    {
        return $this->service->delete($id);
    }
}

