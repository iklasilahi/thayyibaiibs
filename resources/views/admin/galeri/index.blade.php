@extends('layouts.admin')
@section('header_title', 'Kelola Galeri')
@section('content')
<div class="page-header">
    <h2 class="page-title">Galeri Foto</h2>
    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Foto</a>
</div>

<div class="card">
    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:20px;">
        @forelse($galeri as $g)
        <div style="border:1px solid var(--border); border-radius:8px; overflow:hidden;">
            <img src="{{ asset('storage/' . $g->gambar) }}" style="width:100%; height:150px; object-fit:cover;">
            <div style="padding:15px;">
                <h4 style="font-size:14px; margin-bottom:5px;">{{ $g->judul }}</h4>
                <p style="font-size:12px; color:var(--text-muted); margin-bottom:15px;">{{ ucfirst($g->kategori) }}</p>
                <div style="display:flex; gap:10px;">
                    <form action="{{ route('admin.galeri.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')" style="width:100%;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" style="width:100%; justify-content:center;"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div style="grid-column: 1 / -1; text-align:center; padding:40px; color:var(--text-muted);">
            Belum ada foto galeri.
        </div>
        @endforelse
    </div>
    <div style="margin-top:20px;">
        {{ $galeri->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
