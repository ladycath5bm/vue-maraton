<?php

namespace App\Exports;

use App\Models\Todo;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class TodoExport implements FromQuery
{
    use Exportable;

    protected $export;

    public function __construct(string $export)
    {
        $this->export = $export;
     }
        
    public function query()
    {
        return Todo::query()->where('status', '=', $this->export);
    }
}
