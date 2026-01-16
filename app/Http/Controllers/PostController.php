<?php

namespace App\Http\Controllers;

use app\Http\Requests\Post\PostCreateRequest;
use app\Http\Requests\Post\PostShowRequest;
use app\Http\Resources\Post\PostResource;
use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(
        private PostService $service
    ) {}

    public function show(int $id, PostShowRequest $request): PostResource
    {
        $news = $this->service->show($id, $request->validated('cursor'));

        return PostResource::make($news);
    }

    public function create(PostCreateRequest $request): PostResource
    {
        return PostResource::make($this->service->create($request->validated()));
    }
}
