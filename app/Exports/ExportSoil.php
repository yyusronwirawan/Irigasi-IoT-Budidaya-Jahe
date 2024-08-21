<?php

namespace App\Exports;

use App\Models\DataSoil;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportSoil implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('soil.table', [
            'soilData' => DataSoil::orderBy('created_at', 'asc')->get()
        ]);
    }
}