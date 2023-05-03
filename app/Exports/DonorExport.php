<?php
namespace App\Exports;

use App\Models\Donor;
use Maatwebsite\Excel\Concerns\FromCollection;

class DonorExport implements FromCollection
{
    public function collection()
    {
        return Donor::all();
    }
}
