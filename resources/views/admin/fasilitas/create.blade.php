@extends('layouts.admin')
@section('header_title', 'Tambah Fasilitas')
@section('content')
<div class="page-header">
    <div>
        <h2 class="page-title">Tambah Fasilitas Baru</h2>
        <p style="color:var(--text-muted); font-size:14px; margin-top:4px;">Tambahkan sarana dan prasarana penunjang kegiatan santri.</p>
    </div>
    <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-primary" style="background:var(--text-muted)">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card" style="max-width: 860px;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label class="form-label">Nama Fasilitas *</label>
            <input type="text" name="nama" class="form-control" required value="{{ old('nama') }}" placeholder="Contoh: Masjid Jami' Thayyiba, Asrama Santri Modern">
        </div>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:16px;">
            <div class="form-group">
                <label class="form-label">Ikon FontAwesome</label>
                <div style="display:flex; gap:10px; align-items:center;">
                    <div id="ikonPreview" style="width:42px; height:42px; border-radius:8px; background:rgba(183, 28, 28, 0.08); color:var(--primary); display:flex; align-items:center; justify-content:center; font-size:20px; border:1px solid var(--border); flex-shrink:0;">
                        <i class="fas fa-building"></i>
                    </div>
                    <input type="text" id="ikonInput" name="ikon" class="form-control" value="{{ old('ikon', 'fa-building') }}" placeholder="fa-mosque, fa-book-open, fa-bed">
                </div>
                <small style="color:var(--text-muted); display:block; margin-top:6px;">Pilihan cepat ikon umum:</small>
                <div style="display:flex; flex-wrap:wrap; gap:6px; margin-top:6px;">
                    @php
                        $presets = [
                            'fa-mosque' => 'Masjid',
                            'fa-book-open' => 'Perpustakaan',
                            'fa-bed' => 'Asrama',
                            'fa-utensils' => 'Kantin',
                            'fa-laptop' => 'Lab Komputer',
                            'fa-flask' => 'Laboratorium',
                            'fa-futbol' => 'Lapangan',
                            'fa-wifi' => 'Internet',
                            'fa-clinic-medical' => 'Klinik',
                            'fa-building' => 'Gedung'
                        ];
                    @endphp
                    @foreach($presets as $iconClass => $iconName)
                        <button type="button" class="preset-icon-btn" onclick="selectIcon('{{ $iconClass }}')" style="background:#f1f5f9; border:1px solid var(--border); border-radius:6px; padding:4px 8px; font-size:12px; cursor:pointer; display:inline-flex; align-items:center; gap:5px; color:var(--text-main);">
                            <i class="fas {{ $iconClass }}" style="color:var(--primary)"></i> {{ $iconName }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Urutan Tampilan</label>
                <input type="number" name="urutan" class="form-control" value="{{ old('urutan', 0) }}" placeholder="0" min="0">
                <small style="color:var(--text-muted)">Semakin kecil angka, semakin awal muncul di halaman depan.</small>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Foto Fasilitas (Opsional)</label>
            <input type="file" name="gambar" class="form-control" accept="image/*">
            <small style="color:var(--text-muted)">Format: JPG, JPEG, PNG, GIF (Maks. 2MB).</small>
        </div>

        <div class="form-group">
            <label class="form-label">Deskripsi Fasilitas *</label>
            <textarea name="deskripsi" class="form-control" rows="5" required placeholder="Tuliskan keterangan fasilitas, kelengkapan, dan daya tampungnya...">{{ old('deskripsi') }}</textarea>
        </div>

        <div style="display:flex; gap:12px; margin-top:24px;">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan Fasilitas
            </button>
            <a href="{{ route('admin.fasilitas.index') }}" class="btn" style="background:#f1f5f9; color:var(--text-muted);">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    function selectIcon(iconClass) {
        const input = document.getElementById('ikonInput');
        input.value = iconClass;
        updatePreview(iconClass);
    }

    function updatePreview(val) {
        const preview = document.getElementById('ikonPreview');
        const clean = (val || 'fa-building').trim();
        preview.innerHTML = `<i class="fas ${clean}"></i>`;
    }

    document.getElementById('ikonInput').addEventListener('input', function() {
        updatePreview(this.value);
    });
</script>
@endsection
