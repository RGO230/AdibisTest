<?php

namespace app\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
