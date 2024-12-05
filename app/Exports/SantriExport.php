<?php

namespace App\Exports;

use App\Models\Santri;
use Maatwebsite\Excel\Concerns\FromCollection;

class SantriExport implements FromCollection
{
    public function collection()
    {
        return Santri::all(); // Sesuaikan data yang ingin diekspor
    }
}
