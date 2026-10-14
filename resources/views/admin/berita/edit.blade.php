@extends('layouts.admin')
@section('header_title', 'Edit Berita')
@section('content')
<div class="page-header">
    <h2 class="page-title">Edit Berita</h2>
    <a href="{{ route('admin.berita.index') }}" class="btn btn-primary" style="background:var(--text-muted)"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-group">
            <label class="form-label">Judul Berita *</label>
            <input type="text" name="judul" class="form-control" required value="{{ old('judul', $berita->judul) }}">
        </div>
        <div class="form-group">
            <label class="form-label">Kategori *</label>
            <select name="kategori" class="form-control" required>
                <option value="umum" {{ $berita->kategori == 'umum' ? 'selected' : '' }}>Umum</option>
                <option value="kegiatan" {{ $berita->kategori == 'kegiatan' ? 'selected' : '' }}>Kegiatan Santri</option>
                <option value="prestasi" {{ $berita->kategori == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
                <option value="pengumuman" {{ $berita->kategori == 'pengumuman' ? 'selected' : '' }}>Pengumuman</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Gambar Utama</label>
            @if($berita->gambar)
                <div style="margin-bottom:10px;"><img src="{{ asset('storage/' . $berita->gambar) }}" style="max-height:150px; border-radius:8px;"></div>
            @endif
            <input type="file" name="gambar" class="form-control" accept="image/*">
            <small style="color:var(--text-muted)">Kosongkan jika tidak ingin mengubah gambar.</small>
        </div>
        <div class="form-group">
            <label class="form-label">Konten Berita *</label>
            <textarea name="konten" class="form-control" rows="10" required>{{ old('konten', $berita->konten) }}</textarea>
        </div>
        <div class="form-group">
            <label style="display:flex; align-items:center; gap:10px; cursor:pointer;">
                <input type="checkbox" name="is_published" value="1" {{ $berita->is_published ? 'checked' : '' }}> <b>Publikasikan langsung</b>
            </label>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Perbarui Berita</button>
    </form>
</div>
@endsection
