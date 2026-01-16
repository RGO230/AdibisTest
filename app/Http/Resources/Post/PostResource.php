<?php

namespace app\Http\Resources\Post;

use App\Http\Resources\Comment\CommentResource;
use App\Http\Resources\Comment\CommentResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'comments' => $this->whenLoaded('comments', fn() => CommentResourceCollection::make($this->resource->comments)),
        ];
    }
}
