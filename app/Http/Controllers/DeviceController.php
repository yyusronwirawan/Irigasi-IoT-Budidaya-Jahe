<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Http\Controllers\Controller;
use App\Models\Manual;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDevice = Device::all();
        return Inertia::render('Device/index', [
            'title' => 'Device',
            'dataDevice' => $dataDevice,
            'dataTimer' => Schedule::all(),
            'dataManual' => Manual::all()
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
        $request->validate([
            'device' => 'required'
        ]);

        $slug = strtolower($request->device);

        $device = new Device();
        $device->name = $request->device;
        $device->slug = $slug;
        $device->save();
        return redirect()->back()->with('success', 'Device berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device, Request $request)
    {
        $device = $device->find($request->id);
        $device->delete();
        return redirect('/device')->with('success', 'Device berhasil dihapus');
    }
}