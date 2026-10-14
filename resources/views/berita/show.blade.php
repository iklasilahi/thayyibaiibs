@extends('layouts.app')
@section('title', $berita->judul . ' - Pesantren Thayyiba')
@section('meta_description', Str::limit(strip_tags($berita->konten), 150))
@section('content')

<!-- Page Header -->
<div class="page-header" style="padding: 45px 0 38px;">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Beranda</a>
            <span>/</span>
            <a href="{{ route('berita.index') }}">Berita & Informasi</a>
            <span>/</span>
            <span style="color:#ffffff;">Detail Warta</span>
        </div>
    </div>
</div>

<section class="section" style="background:#f8fafc; padding: 45px 0 90px;">
    <div class="container">
        
        <article class="berita-detail animate-on-scroll">
            
            <!-- Meta Bar -->
            <div class="meta">
                <span style="background:rgba(153, 27, 27, 0.08); color:var(--primary); font-weight:700; padding:4px 14px; border-radius:var(--radius-full); font-size:12px; text-transform:uppercase;">
                    <i class="fas fa-tag"></i> {{ ucfirst($berita->kategori) }}
                </span>
                <span>
                    <i class="far fa-calendar-alt" style="color:var(--primary)"></i> {{ $berita->created_at->format('d F Y') }}
                </span>
                <span>
                    <i class="far fa-user" style="color:var(--primary)"></i> Redaksi Pesantren
                </span>
            </div>

            <!-- Title -->
            <h1>{{ $berita->judul }}</h1>

            <!-- Main Featured / Album Image -->
            @if($berita->gambar)
            <div class="berita-img">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" loading="lazy">
            </div>
            @endif

            <!-- Article Body -->
            <div class="content">
                {!! $berita->konten !!}
            </div>

            <!-- Share & Footer Info -->
            <div style="margin-top: 50px; padding-top: 24px; border-top: 1px solid var(--border-light); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                <div style="display:flex; align-items:center; gap:12px;">
                    <span style="font-weight: 700; font-size: 0.92rem; color:var(--dark);">Bagikan Warta:</span>
                    @php
                        $shareUrl = urlencode(request()->fullUrl());
                        $shareTitle = urlencode($berita->judul);
                    @endphp
                    <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" rel="noopener noreferrer" style="width: 38px; height: 38px; background: #25D366; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 16px; transition: transform 0.2s;" title="Bagikan ke WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" style="width: 38px; height: 38px; background: #1877F2; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 16px; transition: transform 0.2s;" title="Bagikan ke Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ $shareTitle }}&url={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" style="width: 38px; height: 38px; background: #000000; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 16px; transition: transform 0.2s;" title="Bagikan ke X / Twitter">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                </div>

                <a href="{{ route('berita.index') }}" class="btn btn-outline" style="font-size:0.88rem; padding:8px 20px;">
                    <i class="fas fa-arrow-left"></i> Kembali ke Berita
                </a>
            </div>

        </article>

        <!-- Related News / Berita Terkait Section -->
        @if(isset($terkait) && $terkait->count() > 0)
        <div style="max-width: 860px; margin: 60px auto 0;">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 24px;">
                <h3 style="font-size: 1.35rem; font-weight: 800; color:var(--dark); margin:0; border-left: 4px solid var(--primary); padding-left: 12px;">
                    Berita Terkait Lainnya
                </h3>
                <a href="{{ route('berita.index') }}" style="color:var(--primary); font-weight:700; font-size:0.88rem; text-decoration:none;">
                    Lihat Semua <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="card-grid" style="grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap:22px; margin-top:0;">
                @foreach($terkait as $t)
                <div class="card" style="box-shadow:var(--shadow-subtle);">
                    <div class="card-img" style="height: 170px;">
                        @if($t->gambar)
                            <img src="{{ asset('storage/' . $t->gambar) }}" alt="{{ $t->judul }}" loading="lazy">
                        @else
                            <div style="width:100%; height:100%; background:linear-gradient(135deg, #7F1D1D 0%, #991B1B 100%); display:flex; align-items:center; justify-content:center; color:white;">
                                <i class="fas fa-newspaper" style="font-size:28px; opacity:0.8;"></i>
                            </div>
                        @endif
                        <span class="card-badge" style="font-size:10px; padding:3px 10px;">
                            {{ ucfirst($t->kategori) }}
                        </span>
                    </div>
                    <div class="card-body" style="padding: 18px;">
                        <h3 style="font-size: 1.02rem; margin-bottom: 8px;">
                            <a href="{{ route('berita.show', $t->slug) }}" style="color: inherit; text-decoration:none;">
                                {{ $t->judul }}
                            </a>
                        </h3>
                        <span style="font-size: 12px; color: var(--text-muted); display:inline-flex; align-items:center; gap:5px; margin-top:auto;">
                            <i class="far fa-calendar-alt"></i> {{ $t->created_at->format('d M Y') }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

@endsection
