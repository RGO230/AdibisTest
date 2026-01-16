<?php

namespace App\Http\Requests\Comment;

use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Foundation\Http\FormRequest;

abstract class BaseCommentRequest extends FormRequest
{
    protected ?Comment $comment = null;

    public function init(): void
    {
        $this->comment = app(CommentService::class)->show($this->route('id'));
    }

    public function authorize(): bool
    {
        return $this->user()->id === $this->comment->user_id;
    }
}

