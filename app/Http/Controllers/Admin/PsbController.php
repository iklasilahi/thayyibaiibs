<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Psb;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PsbController extends Controller
{
    public function index()
    {
        $psb = Psb::latest()->paginate(10);
        return view('admin.psb.index', compact('psb'));
    }

    public function create()
    {
        return view('admin.psb.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun_ajaran' => 'required|string',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
            'persyaratan' => 'required|string',
            'prosedur' => 'nullable|string',
            'biaya' => 'nullable|string',
            'brosur' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:buka,tutup,segera',
        ]);

        $data = $request->except('brosur');

        if ($request->hasFile('brosur')) {
            $data['brosur'] = $request->file('brosur')->store('psb', 'public');
        }

        Psb::create($data);

        return redirect()->route('admin.psb.index')->with('success', 'Data PSB berhasil ditambahkan!');
    }

    public function edit(Psb $psb)
    {
        return view('admin.psb.edit', compact('psb'));
    }

    public function update(Request $request, Psb $psb)
    {
        $request->validate([
            'tahun_ajaran' => 'required|string',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
            'persyaratan' => 'required|string',
            'prosedur' => 'nullable|string',
            'biaya' => 'nullable|string',
            'brosur' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:buka,tutup,segera',
        ]);

        $data = $request->except('brosur');

        if ($request->hasFile('brosur')) {
            if ($psb->brosur) {
                Storage::disk('public')->delete($psb->brosur);
            }
            $data['brosur'] = $request->file('brosur')->store('psb', 'public');
        }

        $psb->update($data);

        return redirect()->route('admin.psb.index')->with('success', 'Data PSB berhasil diperbarui!');
    }

    public function destroy(Psb $psb)
    {
        if ($psb->brosur) {
            Storage::disk('public')->delete($psb->brosur);
        }
        $psb->delete();

        return redirect()->route('admin.psb.index')->with('success', 'Data PSB berhasil dihapus!');
    }

    public function pendaftar(Psb $psb)
    {
        $pendaftar = $psb->pendaftar()->latest()->paginate(20);
        return view('admin.psb.pendaftar', compact('psb', 'pendaftar'));
    }

    public function updateStatus(Request $request, Pendaftar $pendaftar)
    {
        $request->validate(['status' => 'required|in:pending,diterima,ditolak']);
        $pendaftar->update(['status' => $request->status]);
        return back()->with('success', 'Status pendaftar berhasil diperbarui!');
    }
}
