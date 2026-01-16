<?php

namespace App\Http\Requests\Comment;

use App\Enums\CommentableType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'content' => 'required|string',
            'commentable_id' => 'required|integer',
            'commentable_type' => [
                'required',
                'string',
                Rule::enum(CommentableType::class)
            ],
            'parent_id' => 'nullable|integer|required_if:commentable_type,comment|exists:comments,id',
        ];
    }
}

