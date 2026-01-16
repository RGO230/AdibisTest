<?php

namespace app\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsShowRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'cursor' => 'string',
        ];
    }
}
