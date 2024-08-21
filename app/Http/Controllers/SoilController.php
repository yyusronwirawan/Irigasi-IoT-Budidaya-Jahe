<?php

namespace App\Http\Controllers;

use App\Exports\ExportSoil;
use App\Http\Controllers\Controller;
use App\Http\Resources\DataSoilCollection;
use App\Models\DataSoil;
use App\Models\SoilAction;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class SoilController extends Controller
{
    public function index() {
        $dataSoil = new DataSoilCollection(DataSoil::filter(request(['search', 'sort']))->paginate(5)->withQueryString());
        return Inertia::render('Soil/index', [
            'title' => 'Soil',
            'dataSoil' => $dataSoil,
            'dataSoilAll' => DataSoil::all(),
            'dataAction' => SoilAction::all()
        ]);
    }

    public function indexData() {
        $dataSoil = new DataSoilCollection(DataSoil::filter(request(['search', 'sort']))->paginate(25)->withQueryString());
        return Inertia::render('Soil/Data', [
            'title' => 'Soil Data',
            'dataSoil' => $dataSoil
        ]);
    }

    public function viewExportTable() {
        return view('soil.table', [
            'soilData' => DataSoil::all()
        ]);
    }

    public function exportTable() {
        return Excel::download(new ExportSoil, 'Data Kualitas Tanah.xlsx');
    }

    public function action(Request $request) {
        $sensor1 = $request->sensor1;
        $sensor2 = $request->sensor2;

        $sensor1 ?? "off";
        $sensor2 ?? "off"; 

        $soilAction = SoilAction::find(1)->update([
            'sensor1' => $sensor1,
            'sensor2' => $sensor2,
        ]);
        return redirect()->back()->with('success', 'Sensor berhasil diaktifkan');
    }
}