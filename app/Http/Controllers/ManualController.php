<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataManual = Manual::orderBy('device', 'asc')->get();
        $dataDevice = Device::all();

        return Inertia::render('Manual/index', [
            'title' => 'Manual',
            'dataManual' => $dataManual,
            'dataDevice' => $dataDevice
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pompa = $request->pompa;
        $sol_1 = $request->sol_1;
        $sol_2 = $request->sol_2;
        $sol_3 = $request->sol_3;
        $sol_4 = $request->sol_4;

        $pompa ? $pompa = 1 : $pompa = 0;
        $sol_1 ? $sol_1 = 1 : $sol_1 = 0;
        $sol_2 ? $sol_2 = 1 : $sol_2 = 0;
        $sol_3 ? $sol_3 = 1 : $sol_3 = 0;
        $sol_4 ? $sol_4 = 1 : $sol_4 = 0;
        
        $manual = new Manual();
        $manual->device = $request->device;
        $manual->slug = strtolower($request->device);
        $manual->pompa = $pompa;
        $manual->sol_1 = $sol_1;
        $manual->sol_2 = $sol_2;
        $manual->sol_3 = $sol_3;
        $manual->sol_4 = $sol_4;
        $manual->save();
        return redirect()->back()->with('success', 'Pengaturan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manual $manual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manual $manual, Request $request)
    {
        $dataDevice = Device::all();
        return Inertia::render('Manual/EditManual', [
            'title' => 'Update Manual',
            'manual' => $manual->find($request->id),
            'dataDevice' => $dataDevice
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manual $manual)
    {
        $pompa = $request->pompa;
        $sol_1 = $request->sol_1;
        $sol_2 = $request->sol_2;
        $sol_3 = $request->sol_3;
        $sol_4 = $request->sol_4;

        $pompa ? $pompa = 1 : $pompa = 0;
        $sol_1 ? $sol_1 = 1 : $sol_1 = 0;
        $sol_2 ? $sol_2 = 1 : $sol_2 = 0;
        $sol_3 ? $sol_3 = 1 : $sol_3 = 0;
        $sol_4 ? $sol_4 = 1 : $sol_4 = 0;
        
        Manual::find($request->id)->update([
            'device' => $request->device,
            'slug' => strtolower($request->device),
            'pompa' => $pompa,
            'sol_1' => $sol_1,
            'sol_2' => $sol_2,
            'sol_3' => $sol_3,
            'sol_4' => $sol_4
        ]);
        return redirect('/manual')->with('success', 'Pengaturan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Manual $manual)
    {
        $manual = $manual->find($request->id);
        $manual->delete();
        return redirect('/manual')->with('success', 'Pengaturan berhasil dihapus');
    }

    public function data() {
        $dataManual = Manual::all();
        return response()->json($dataManual);
    }
}