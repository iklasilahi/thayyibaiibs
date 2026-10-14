<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Fasilitas;
use App\Models\Slider;
use App\Models\Program;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_active', true)->orderBy('urutan')->get();
        $beritas = Berita::where('is_published', true)->latest()->take(6)->get();
        $berita = $beritas;
        $galeris = Galeri::latest()->take(8)->get();
        $galeri = $galeris;
        $fasilitass = Fasilitas::orderBy('urutan')->take(6)->get();
        $fasilitas = $fasilitass;
        $programs = Program::where('is_active', true)->take(6)->get();
        $program = $programs;
        $pendirs = collect();

        $stats = [
            'santri' => 850,
            'guru' => 65,
            'alumni' => 5200,
            'tahun' => 2005,
        ];

        return view('home', compact('sliders', 'beritas', 'berita', 'galeris', 'galeri', 'fasilitass', 'fasilitas', 'programs', 'program', 'pendirs', 'stats'));
    }
}
