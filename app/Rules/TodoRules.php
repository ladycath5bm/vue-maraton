<?php

namespace App\Rules;

use App\Contracts\Rules;
use Illuminate\Contracts\Support\Arrayable;

class TodoRules implements Rules
{
    public static function toArray(): array
    {
        return [
            'title' => ['required', 'min:3', 'max:60'],
            'description' => ['required','min:10'],
            'status' => ['required'],
        ];
    }

}