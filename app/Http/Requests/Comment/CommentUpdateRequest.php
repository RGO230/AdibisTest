<?php

namespace App\Http\Requests\Comment;

class CommentUpdateRequest extends BaseCommentRequest
{
    public function rules(): array
    {
        return [
            'content' => 'required|string',
        ];
    }
}

