<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimerController extends Controller
{
    public function index() {
        return Inertia::render('Timer/index', [
            'title' => 'Timer',
            'dataTimer' => Schedule::orderBy('device_id', 'asc')->orderBy('noJadwal', 'asc')->get(),
            'dataDevice' => Device::all()
        ]);
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'device' => 'required',
            'noJadwal' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
            'durasiJam' => 'required',
            'durasiMenit' => 'required',
            'durasiDetik' => 'required',
        ]);

        $waktu = explode(":", $request->waktu);
        $jam = $waktu[0];
        $menit = $waktu[1];


        $schedule = new Schedule();
        $schedule->device_id = $request->device;
        $schedule->noJadwal = $request->noJadwal;
        $schedule->hari = $request->hari;
        $schedule->sol_1 = $request->sol_1;
        $schedule->sol_2 = $request->sol_2;
        $schedule->sol_3 = $request->sol_3;
        $schedule->sol_4 = $request->sol_4;
        $schedule->jam = $jam;
        $schedule->menit = $menit;
        $schedule->detik = "0";
        $schedule->durasiJam = $request->durasiJam;
        $schedule->durasiMenit = $request->durasiMenit;
        $schedule->durasiDetik = $request->durasiDetik;
        $schedule->status = $request->status;
        $schedule->save();

        return redirect()->back()->with('success', 'Pengaturan berhasil ditambahkan');
    }

    public function edit(Request $request) {
        return Inertia::render('Timer/EditTimer', [
            'title' => 'Edit Timer',
            'timer' => Schedule::find($request->id),
            'dataDevice' => Device::all()
        ]);
    }

    public function update(Request $request) {
        // dd($request->all());
        $waktu = explode(":", $request->waktu);
        $jam = $waktu[0];
        $menit = $waktu[1];

        $schedule = Schedule::find($request->id);
        $schedule->device_id = $request->device;
        $schedule->noJadwal = $request->noJadwal;
        $schedule->hari = $request->hari;
        $schedule->sol_1 = $request->sol_1;
        $schedule->sol_2 = $request->sol_2;
        $schedule->sol_3 = $request->sol_3;
        $schedule->sol_4 = $request->sol_4;
        $schedule->jam = $jam;
        $schedule->menit = $menit;
        $schedule->detik = "0";
        $schedule->durasiJam = $request->durasiJam;
        $schedule->durasiMenit = $request->durasiMenit;
        $schedule->durasiDetik = $request->durasiDetik;
        $schedule->status = $request->status;
        $schedule->save();
        
        return redirect('/timer')->with('success', 'Pengaturan berhasil diupdate');
    }

    public function destroy(Request $request) {
        $schedule = Schedule::find($request->id);
        $schedule->delete();
        return redirect('/timer')->with('success', 'Pengaturan berhasil dihapus');
    }
}