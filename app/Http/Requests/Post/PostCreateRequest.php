<?php

namespace app\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
