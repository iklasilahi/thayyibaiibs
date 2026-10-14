<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;

class ProfilController extends Controller
{
    public function sejarah()
    {
        return view('profil.sejarah');
    }

    public function visiMisi()
    {
        return view('profil.visi-misi');
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::orderBy('urutan')->get();
        return view('profil.fasilitas', compact('fasilitas'));
    }

    public function strukturOrganisasi()
    {
        return view('profil.struktur');
    }

    public function pengurus()
    {
        return view('profil.struktur');
    }
}
