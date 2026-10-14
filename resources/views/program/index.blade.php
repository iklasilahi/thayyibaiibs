@extends('layouts.app')
@section('title', 'Program - Pesantren Thayyiba')
@section('content')
<div class="page-header">
    <div class="container">
        <h2>Program Kami</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> <span>/</span> <span>Program</span>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        @if($kategori->count() > 1)
        <div class="filter-tabs animate-on-scroll">
            <button class="filter-tab active" onclick="filterProgram('all')">Semua</button>
            @foreach($kategori as $k)
            <button class="filter-tab" onclick="filterProgram('{{ $k }}')">{{ ucfirst($k) }}</button>
            @endforeach
        </div>
        @endif

        @if($programs->count() > 0)
        <div class="program-grid">
            @foreach($programs as $p)
            <div class="program-card animate-on-scroll" data-kategori="{{ $p->kategori }}">
                <div class="card-img">
                    @if($p->gambar)
                    <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}">
                    @else
                    <div style="width:100%;height:100%;background:linear-gradient(135deg, var(--primary-bg), var(--gray-100));display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-graduation-cap" style="font-size:40px;color:var(--gray-300);"></i>
                    </div>
                    @endif
                    <span class="kategori-badge">{{ ucfirst($p->kategori) }}</span>
                </div>
                <div class="card-body">
                    <h3>{{ $p->nama }}</h3>
                    @if($p->jadwal)
                    <div class="jadwal"><i class="fas fa-clock"></i> {{ $p->jadwal }}</div>
                    @endif
                    <p>{{ Str::limit($p->deskripsi, 150) }}</p>
                    <a href="{{ route('program.show', $p->slug) }}" class="card-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="no-data">
            <i class="fas fa-graduation-cap"></i>
            <p>Program akan ditampilkan setelah ditambahkan melalui admin panel.</p>
        </div>
        @endif
    </div>
</section>
@endsection
@section('scripts')
<script>
window.filterProgram = function(kat, btn) {
    document.querySelectorAll('.filter-tab').forEach(function(t) {
        t.classList.remove('active');
    });

    var targetBtn = btn || (typeof event !== 'undefined' && event && event.target ? event.target.closest('.filter-tab') : null);
    if (targetBtn) {
        targetBtn.classList.add('active');
    }

    var targetKat = String(kat || 'all').trim().toLowerCase();
    document.querySelectorAll('.program-card').forEach(function(c) {
        var cardKat = String(c.dataset.kategori || '').trim().toLowerCase();
        if (targetKat === 'all' || cardKat === targetKat) {
            c.style.display = '';
        } else {
            c.style.display = 'none';
        }
    });
};
</script>
@endsection
