@extends('layouts.app')
@section('title', 'Berita & Informasi - Pesantren Thayyiba')
@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <span style="display:inline-flex; align-items:center; gap:8px; background:rgba(251, 191, 36, 0.18); color:#fef08a; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px; padding:6px 16px; border-radius:var(--radius-full); margin-bottom:14px; border:1px solid rgba(251, 191, 36, 0.3);">
            <i class="fas fa-newspaper"></i> Warta & Artikel Pesantren
        </span>
        <h2>Berita & Informasi</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Beranda</a>
            <span>/</span>
            <span>Berita & Informasi</span>
        </div>
    </div>
</div>

<section class="section" style="background:#f8fafc; padding: 60px 0 90px;">
    <div class="container">

        <!-- Intro Bar & Filter -->
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:36px; flex-wrap:wrap; gap:18px;">
            <div>
                <h3 style="font-size:1.35rem; font-weight:800; color:var(--dark); margin-bottom:4px;">
                    Kumpulan Informasi Terkini
                </h3>
                <p style="color:var(--text-muted); font-size:0.92rem; margin:0;">
                    Simak kabar terbaru seputar kegiatan santri, prestasi akademik, serta pengumuman resmi.
                </p>
            </div>
            <div style="display:inline-flex; align-items:center; gap:10px; background:#ffffff; padding:6px 16px; border-radius:var(--radius-full); border:1px solid var(--border-light); font-size:0.85rem; color:var(--text-muted); box-shadow:0 2px 8px rgba(0,0,0,0.03);">
                <i class="fas fa-newspaper" style="color:var(--primary);"></i>
                <span>Total <strong>{{ $berita->total() }}</strong> Artikel Terbit</span>
            </div>
        </div>

        @if($berita->count() > 0)
        <div class="card-grid">
            @foreach($berita as $b)
            <article class="card animate-on-scroll">
                <!-- Cover / Album Image Section -->
                <div class="card-img">
                    <a href="{{ route('berita.show', $b->slug) }}" style="display:block; width:100%; height:100%; text-decoration:none;">
                        @if($b->gambar)
                            <img src="{{ asset('storage/' . $b->gambar) }}" alt="{{ $b->judul }}" loading="lazy">
                        @else
                            <div style="width:100%; height:100%; background:linear-gradient(135deg, #7F1D1D 0%, #991B1B 50%, #B91C1C 100%); display:flex; flex-direction:column; align-items:center; justify-content:center; color:rgba(255,255,255,0.85); gap:10px;">
                                <i class="fas fa-newspaper" style="font-size:42px; opacity:0.8;"></i>
                                <span style="font-size:12px; font-weight:600; letter-spacing:0.5px; opacity:0.9;">Pesantren Thayyiba</span>
                            </div>
                        @endif
                    </a>

                    <!-- Floating Badges -->
                    <span class="card-badge">
                        {{ ucfirst($b->kategori) }}
                    </span>
                    <span class="card-date">
                        <i class="far fa-calendar-alt" style="color:var(--primary);"></i>
                        {{ $b->created_at->format('d M Y') }}
                    </span>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h3>
                        <a href="{{ route('berita.show', $b->slug) }}">
                            {{ $b->judul }}
                        </a>
                    </h3>
                    <p>
                        {{ Str::limit(strip_tags($b->konten), 125) }}
                    </p>
                    <div style="display:flex; align-items:center; justify-content:space-between; margin-top:auto; padding-top:14px; border-top:1px solid #f1f5f9;">
                        <a href="{{ route('berita.show', $b->slug) }}" class="card-link">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                        <span style="font-size:0.78rem; color:var(--text-muted); display:inline-flex; align-items:center; gap:5px;">
                            <i class="far fa-clock"></i> 3 mnt baca
                        </span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="pagination-wrap">
            {{ $berita->links('pagination::bootstrap-4') }}
        </div>
        @else
        <div class="no-data">
            <i class="fas fa-newspaper"></i>
            <h4 style="font-size:1.25rem; font-weight:700; color:var(--dark); margin-bottom:8px;">Belum Ada Berita</h4>
            <p>Informasi dan warta kegiatan akan segera diperbarui secara berkala oleh pihak redaksi.</p>
            <a href="{{ route('home') }}" class="btn btn-outline" style="margin-top:16px;">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
        @endif

    </div>
</section>

@endsection
