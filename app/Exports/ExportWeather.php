<?php

namespace App\Exports;

use App\Models\Weather;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportWeather implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('weather.table', [
            'weatherData' => Weather::orderBy('created_at', 'asc')->get()
        ]);
    }
}