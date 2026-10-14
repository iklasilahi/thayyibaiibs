<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Program;
use App\Models\Psb;
use App\Models\Pendaftar;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'berita' => Berita::count(),
            'galeri' => Galeri::count(),
            'program' => Program::count(),
            'pendaftar' => Pendaftar::count(),
        ];

        $beritaTerbaru = Berita::latest()->take(5)->get();
        $pendaftarTerbaru = Pendaftar::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'beritaTerbaru', 'pendaftarTerbaru'));
    }
}
