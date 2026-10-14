@extends('layouts.app')
@section('title', 'Penerimaan Santri Baru - Pesantren Thayyiba')
@section('content')

@if(session('success'))
<div style="background: #E8F5E9; color: #2E7D32; padding: 16px; text-align: center; font-weight: 600; border-bottom: 2px solid #A5D6A7;">
    <div class="container">
        <i class="fas fa-check-circle" style="margin-right: 8px;"></i> {{ session('success') }}
    </div>
</div>
@endif

<!-- Hero PSB -->
<section class="psb-hero">
    <div class="container">
        <div class="psb-hero-badge">
            <i class="fas fa-graduation-cap"></i> Penerimaan Santri Baru
        </div>
        <h1>
            <span>Pesantren Thayyiba</span>
            Langkah Awal Menuntut Ilmu
        </h1>
        <p class="psb-hero-desc">
            Temukan informasi pendaftaran calon santri Pondok Pesantren Thayyiba. Siapkan diri untuk belajar, bertumbuh, dan membangun masa depan dalam lingkungan Islami yang nyaman.
        </p>

        @if($psb)
            <div class="psb-hero-meta">
                <div class="psb-status {{ $psb->status }}">
                    <div class="pulse"></div>
                    Status: {{ strtoupper($psb->status) }}
                </div>
                <div class="psb-hero-pill">
                    <i class="fas fa-award"></i>
                    <span>Tahun Ajaran: <strong>{{ $psb->tahun_ajaran }}</strong></span>
                </div>
                <div class="psb-hero-pill">
                    <i class="far fa-calendar-alt"></i>
                    <span>{{ \Carbon\Carbon::parse($psb->tanggal_buka)->format('d M Y') }} s/d {{ \Carbon\Carbon::parse($psb->tanggal_tutup)->format('d M Y') }}</span>
                </div>
            </div>
        @else
            <div class="psb-hero-meta">
                <div class="psb-status buka">
                    <div class="pulse"></div>
                    Status: DIBUKA
                </div>
                <div class="psb-hero-pill">
                    <i class="fas fa-award"></i>
                    <span>Tahun Ajaran: <strong>{{ date('Y') }}/{{ date('Y') + 1 }}</strong></span>
                </div>
            </div>
        @endif

        @if($psb && $psb->brosur)
        <div class="psb-hero-actions">
            <a href="{{ asset('storage/' . $psb->brosur) }}" target="_blank" class="psb-btn-primary">
                <i class="fas fa-file-pdf"></i> Download Brosur Lengkap
            </a>
        </div>
        @endif
    </div>
</section>

<!-- Informasi Pendaftaran Section -->
<section class="section" style="background: #f8fafc; padding: 70px 0;">
    <div class="container">
        <div class="psb-section-header" style="text-align: center; margin-bottom: 40px;">
            <span style="display: inline-block; background: #fee2e2; color: #991b1b; font-weight: 800; font-size: 0.82rem; padding: 6px 18px; border-radius: 50px; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 12px; border: 1px solid rgba(153, 27, 27, 0.2);">
                Portal Informasi PSB
            </span>
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px; letter-spacing: -0.5px;">
                Informasi Pendaftaran
            </h2>
            <p style="font-size: 1.05rem; color: #475569; max-width: 580px; margin: 0 auto; font-weight: 500;">
                Pilih informasi yang ingin Anda ketahui.
            </p>
        </div>

        <div class="psb-info-grid">
            <!-- INFO 01: Syarat Pendaftaran -->
            <div class="psb-info-card" style="display: flex; flex-direction: column;">
                <div class="psb-card-header" style="margin-bottom: 12px;">
                    <span class="psb-card-badge">INFO 01</span>
                </div>
                <h3 class="psb-card-title">Syarat Pendaftaran</h3>
                <p class="psb-card-desc" style="margin-bottom: 0;">
                    Persyaratan administrasi dan dokumen penting bagi calon santri.
                </p>
            </div>

            <!-- INFO 02: Jadwal Pendaftaran -->
            <div class="psb-info-card" style="display: flex; flex-direction: column;">
                <div class="psb-card-header" style="margin-bottom: 12px;">
                    <span class="psb-card-badge">INFO 02</span>
                </div>
                <h3 class="psb-card-title">Jadwal Pendaftaran</h3>
                <p class="psb-card-desc" style="margin-bottom: 0;">
                    Waktu, tahapan, dan alur pendaftaran santri baru.
                </p>
            </div>

            <!-- INFO 03: Materi Ujian -->
            <div class="psb-info-card" style="display: flex; flex-direction: column;">
                <div class="psb-card-header" style="margin-bottom: 12px;">
                    <span class="psb-card-badge">INFO 03</span>
                </div>
                <h3 class="psb-card-title">Materi Ujian</h3>
                <p class="psb-card-desc" style="margin-bottom: 0;">
                    Daftar materi seleksi dan panduan belajar calon santri.
                </p>
            </div>

            <!-- INFO 04: Kontak Informasi -->
            <div class="psb-info-card" style="display: flex; flex-direction: column;">
                <div class="psb-card-header" style="margin-bottom: 12px;">
                    <span class="psb-card-badge">INFO 04</span>
                </div>
                <h3 class="psb-card-title">Kontak Informasi</h3>
                <p class="psb-card-desc" style="margin-bottom: 0;">
                    Hubungi panitia PSB untuk pertanyaan dan bantuan pendaftaran.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
