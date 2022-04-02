<?php

namespace App\Contracts;

use Illuminate\Contracts\Support\Arrayable;

interface Rules
{
    public static function toArray(): array;
}