<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(12);
        $kategori = Galeri::distinct()->pluck('kategori');
        return view('galeri.index', compact('galeri', 'kategori'));
    }
}
