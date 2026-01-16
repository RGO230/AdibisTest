<?php

namespace app\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostShowRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'cursor' => 'string',
        ];
    }
}
