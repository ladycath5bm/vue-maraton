<?php

namespace App\Http\Requests\Api\Todo;

use Illuminate\Foundation\Http\FormRequest;

class StoreAndUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'min:3', 'max:60'],
            'description' => ['min:10'],
        ];
    }
}
