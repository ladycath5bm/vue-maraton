<?php

namespace App\Imports;

use App\Models\Todo;
use App\Rules\TodoRules;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class TodoImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new Todo([
            'title'     => $row['title'],
            'description'    => $row['description'],
            'status' => $row['status'],
        ]);
    }
    public function rules(): array
    {
        return TodoRules::toArray();
    }
}
