<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PesanCollection;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LogAlatController extends Controller
{
    public function index() {
        $dataPesan = new PesanCollection(Pesan::paginate(25)->withQueryString());
        return Inertia::render('LogAlat/index', [
            'title' => 'Log Alat',
            'dataPesan' => $dataPesan
        ]);
    }
}