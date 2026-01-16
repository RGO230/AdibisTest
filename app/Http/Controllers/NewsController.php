<?php

namespace App\Http\Controllers;

use app\Http\Requests\News\NewsCreateRequest;
use app\Http\Requests\News\NewsShowRequest;
use app\Http\Resources\News\NewsResource;
use App\Services\NewsService;

class NewsController extends Controller
{
    public function __construct(
        private NewsService $service
    ) {}

    public function show(int $id, NewsShowRequest $request): NewsResource
    {
        $news = $this->service->show($id, $request->validated('cursor'));

        return NewsResource::make($news);
    }

    public function create(NewsCreateRequest $request): NewsResource
    {
        return NewsResource::make($this->service->create($request->validated()));
    }
}
