<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'title' => 'Dashboard',
            'manuals' => Manual::orderBy('created_at', 'desc')->limit(5)->get(),
            'manuals_all' => Manual::all()
        ]);
    }

    public function adminDashboard() {
        return view('dashboard', [
            'title' => 'Admin Dashboard',
            'manuals' => Manual::orderBy('created_at', 'desc')->limit(5)->get(),
            'manuals_all' => Manual::all()
        ]);
    }

    public function publicDashboard() {
        return view('dashboard', [
            'title' => 'Public Dashboard',
            'manuals' => Manual::orderBy('created_at', 'desc')->limit(5)->get(),
            'manuals_all' => Manual::all()
        ]);
    }
}