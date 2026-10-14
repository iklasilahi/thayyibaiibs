@extends('layouts.admin')
@section('header_title', 'Tambah Berita')
@section('content')
<div class="page-header">
    <h2 class="page-title">Tambah Berita Baru</h2>
    <a href="{{ route('admin.berita.index') }}" class="btn btn-primary" style="background:var(--text-muted)"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-label">Judul Berita *</label>
            <input type="text" name="judul" class="form-control" required value="{{ old('judul') }}">
        </div>
        <div class="form-group">
            <label class="form-label">Kategori *</label>
            <select name="kategori" class="form-control" required>
                <option value="umum">Umum</option>
                <option value="kegiatan">Kegiatan Santri</option>
                <option value="prestasi">Prestasi</option>
                <option value="pengumuman">Pengumuman</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Gambar Utama</label>
            <input type="file" name="gambar" class="form-control" accept="image/*">
        </div>
        <div class="form-group">
            <label class="form-label">Konten Berita *</label>
            <textarea name="konten" class="form-control" rows="10" required>{{ old('konten') }}</textarea>
        </div>
        <div class="form-group">
            <label style="display:flex; align-items:center; gap:10px; cursor:pointer;">
                <input type="checkbox" name="is_published" value="1" checked> <b>Publikasikan langsung</b>
            </label>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Berita</button>
    </form>
</div>
@endsection
