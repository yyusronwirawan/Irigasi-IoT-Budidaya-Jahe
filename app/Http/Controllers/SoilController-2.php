<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\DataSoil;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SoilController extends Controller
{
    public function index() {
        return view('soil.soil', [
            'title' => 'Soil',
            'tanamans' => Tanaman::all(),
            'blocks' => Block::all()
        ]);
    }

    public function dataSoil() {
        return view('soil.data-soil', [
            'title' => 'Soil Data',
            'soilDatas' => DataSoil::orderBy('created_at', 'asc')->paginate(10),
            'allSoilDatas' => DataSoil::all()
        ]);
    }

    public function createBlock() {
        return view('soil.create-block', [
            'title' => 'Tambah Block Tanaman'
        ]);
    }

    public function storeBlock(Request $request) {
        $validatedData = $request->validate(
        [
            'block' => 'required'
        ],
        [
            'block.required' => 'Block wajib diisi'
        ]);
        $validatedData['block'] = strtoupper($validatedData['block']);
    }

    public function blockIndex($block_id) {
        return view('soil.block', [
            'title' => 'Detail Block Tanaman',
            'block' => Block::firstWhere('block', $block_id),
            'soilDatas' => DataSoil::orderBy('created_at', 'asc')->paginate(10)
        ]);
    }

    public function sensorSatuIndex() {
        return view('soil.sensor', [
            'title' => 'Detail Block Tanaman',
        ]);
    }
}