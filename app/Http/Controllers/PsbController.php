<?php

namespace App\Http\Controllers;

use App\Models\Psb;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PsbController extends Controller
{
    public function index()
    {
        $psb = Psb::latest()->first();
        return view('psb.index', compact('psb'));
    }

    public function syarat()
    {
        $psb = Psb::latest()->first();
        return view('psb.syarat', compact('psb'));
    }

    public function jadwal()
    {
        $psb = Psb::latest()->first();
        return view('psb.jadwal', compact('psb'));
    }

    public function materi()
    {
        $psb = Psb::latest()->first();
        return view('psb.materi', compact('psb'));
    }

    public function kontak()
    {
        $psb = Psb::latest()->first();
        return view('psb.kontak', compact('psb'));
    }

    public function daftar(Request $request)
    {
        $validated = $request->validate([
            'psb_id' => 'required|exists:psb,id',
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'nullable|string|max:20',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'asal_sekolah' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'email' => 'nullable|email',
        ]);

        $validated['status'] = 'pending';

        Pendaftar::create($validated);

        return redirect()->route('psb.index')->with('success', 'Pendaftaran berhasil! Kami akan menghubungi Anda melalui nomor yang terdaftar.');
    }
}
