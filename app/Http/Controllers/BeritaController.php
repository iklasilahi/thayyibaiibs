<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::where('is_published', true)->latest()->paginate(9);
        return view('berita.index', compact('berita'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $terkait = Berita::where('id', '!=', $berita->id)
            ->where('is_published', true)
            ->latest()
            ->take(3)
            ->get();
        return view('berita.show', compact('berita', 'terkait'));
    }
}
