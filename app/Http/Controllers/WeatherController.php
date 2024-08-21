<?php

namespace App\Http\Controllers;

use App\Exports\ExportWeather;
use App\Http\Controllers\Controller;
use App\Http\Resources\WeatherCollection;
use App\Models\Weather;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class WeatherController extends Controller
{
    public function index() {
        $dataWeather = new WeatherCollection(Weather::filter(request(['search', 'sort', 'kondisi']))->paginate(25)->withQueryString());
        return Inertia::render('Weather/index', [
            'title' => 'Weather',
            'dataWeather' => $dataWeather
        ]);
    }

    public function viewExportTable() {
        return view('weather.table', [
            'weatherData' => Weather::all()
        ]);
    }

    public function exportTable() {
        return Excel::download(new ExportWeather, 'Data Cuaca Mikro.xlsx');
    }
}