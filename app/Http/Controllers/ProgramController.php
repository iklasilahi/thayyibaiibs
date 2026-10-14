<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('is_active', true)->get();
        $kategori = Program::where('is_active', true)->distinct()->pluck('kategori');
        return view('program.index', compact('programs', 'kategori'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        return view('program.show', compact('program'));
    }
}
