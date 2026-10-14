@extends('layouts.admin')
@section('header_title', 'Tambah Foto Galeri')
@section('content')
<div class="page-header">
    <h2 class="page-title">Tambah Foto Galeri</h2>
    <a href="{{ route('admin.galeri.index') }}" class="btn btn-primary" style="background:var(--text-muted)"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>
<div class="card" style="max-width: 600px;">
    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-label">Judul Foto *</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-label">Kategori *</label>
            <input type="text" name="kategori" class="form-control" required placeholder="Contoh: Kegiatan, Fasilitas, Ekstrakurikuler">
        </div>
        <div class="form-group">
            <label class="form-label">File Gambar *</label>
            <input type="file" name="gambar" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload Foto</button>
    </form>
</div>
@endsection
