<?php

namespace app\Http\Resources\News;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'comments' => $this->whenLoaded('comments', fn() => $this->resource->comments),
        ];
    }
}
