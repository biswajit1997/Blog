<?php

namespace App\Exports;

use App\User;
use App\Models\Import;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Import::all();
    }
}
