@extends('layouts.admin')
@section('header_title', 'Tambah Program')
@section('content')
<div class="page-header">
    <h2 class="page-title">Tambah Program Baru</h2>
    <a href="{{ route('admin.program.index') }}" class="btn btn-primary" style="background:var(--text-muted)"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>
<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-label">Nama Program *</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="form-label">Kategori *</label>
            <input type="text" name="kategori" class="form-control" required placeholder="Contoh: Ekstrakurikuler, Pendidikan, dll">
        </div>
        <div class="form-group">
            <label class="form-label">Jadwal</label>
            <input type="text" name="jadwal" class="form-control" placeholder="Contoh: Setiap Jumat Sore">
        </div>
        <div class="form-group">
            <label class="form-label">Gambar Program</label>
            <input type="file" name="gambar" class="form-control" accept="image/*">
        </div>
        <div class="form-group">
            <label class="form-label">Deskripsi *</label>
            <textarea name="deskripsi" class="form-control" rows="6" required></textarea>
        </div>
        <div class="form-group">
            <label style="display:flex; align-items:center; gap:10px; cursor:pointer;">
                <input type="checkbox" name="is_active" value="1" checked> <b>Aktif (Tampilkan di web)</b>
            </label>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Program</button>
    </form>
</div>
@endsection
