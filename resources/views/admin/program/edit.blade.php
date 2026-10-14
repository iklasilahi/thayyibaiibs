@extends('layouts.admin')
@section('header_title', 'Edit Program')
@section('content')
<div class="page-header">
    <h2 class="page-title">Edit Program</h2>
    <a href="{{ route('admin.program.index') }}" class="btn btn-primary" style="background:var(--text-muted)"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

<div class="card" style="max-width: 800px;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label class="form-label">Nama Program *</label>
            <input type="text" name="nama" class="form-control" required value="{{ old('nama', $program->nama) }}">
        </div>

        <div class="form-group">
            <label class="form-label">Kategori *</label>
            <input type="text" name="kategori" class="form-control" required value="{{ old('kategori', $program->kategori) }}" placeholder="Contoh: Ekstrakurikuler, Pendidikan, dll">
        </div>

        <div class="form-group">
            <label class="form-label">Jadwal</label>
            <input type="text" name="jadwal" class="form-control" value="{{ old('jadwal', $program->jadwal) }}" placeholder="Contoh: Setiap Jumat Sore">
        </div>

        <div class="form-group">
            <label class="form-label">Gambar Program</label>
            @if($program->gambar)
                <div style="margin-bottom:10px;">
                    <img src="{{ asset('storage/' . $program->gambar) }}" style="max-height:120px; border-radius:8px;">
                </div>
            @endif
            <input type="file" name="gambar" class="form-control" accept="image/*">
            <small style="color:var(--text-muted)">Kosongkan jika tidak ingin mengubah gambar.</small>
        </div>

        <div class="form-group">
            <label class="form-label">Deskripsi *</label>
            <textarea name="deskripsi" class="form-control" rows="6" required>{{ old('deskripsi', $program->deskripsi) }}</textarea>
        </div>

        <div class="form-group">
            <label style="display:flex; align-items:center; gap:10px; cursor:pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $program->is_active) ? 'checked' : '' }}> <b>Aktif (Tampilkan di web)</b>
            </label>
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Perbarui Program</button>
    </form>
</div>
@endsection
