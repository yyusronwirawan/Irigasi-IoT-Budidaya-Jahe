<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index() {
        return view('weather', [
            'title' => 'Weather',
            'dataWeathers' => Weather::orderBy('created_at', 'asc')->paginate(10),
            'allDataWeathers' => Weather::all()
        ]);
    }
}