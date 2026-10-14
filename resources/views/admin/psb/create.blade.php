@extends('layouts.admin')
@section('header_title', 'Buka PSB Baru')
@section('content')
<div class="page-header">
    <h2 class="page-title">Form Buka PSB</h2>
    <a href="{{ route('admin.psb.index') }}" class="btn btn-primary" style="background:var(--text-muted)"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>
<div class="card" style="max-width: 800px;">
    <form action="{{ route('admin.psb.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-label">Tahun Ajaran * (Contoh: 2024/2025)</label>
            <input type="text" name="tahun_ajaran" class="form-control" required value="{{ old('tahun_ajaran') }}">
        </div>
        <div style="display:flex; gap:20px;">
            <div class="form-group" style="flex:1">
                <label class="form-label">Tanggal Buka *</label>
                <input type="date" name="tanggal_buka" class="form-control" required value="{{ old('tanggal_buka') }}">
            </div>
            <div class="form-group" style="flex:1">
                <label class="form-label">Tanggal Tutup *</label>
                <input type="date" name="tanggal_tutup" class="form-control" required value="{{ old('tanggal_tutup') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Persyaratan *</label>
            <textarea name="persyaratan" class="form-control" rows="5" required>{{ old('persyaratan') }}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label">Rincian Biaya</label>
            <textarea name="biaya" class="form-control" rows="4">{{ old('biaya') }}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label">Status PSB *</label>
            <select name="status" class="form-control" required>
                <option value="buka">Buka</option>
                <option value="segera">Segera (Coming Soon)</option>
                <option value="tutup">Tutup</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Buka PSB</button>
    </form>
</div>
@endsection
