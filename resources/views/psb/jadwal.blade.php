@extends('layouts.app')
@section('title', 'Jadwal Pendaftaran - Penerimaan Santri Baru Pesantren Thayyiba')
@section('content')

<!-- Page Header -->
<div class="psb-page-header">
    <div class="container">
        <span class="psb-page-header-tag"><i class="fas fa-calendar-alt"></i> Penerimaan Santri Baru</span>
        <h1>Jadwal Pendaftaran</h1>
        <div class="psb-breadcrumb">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Beranda</a>
            <span class="divider">/</span>
            <a href="{{ route('psb.index') }}">PSB</a>
            <span class="divider">/</span>
            <span>Jadwal Pendaftaran</span>
        </div>
    </div>
</div>

<!-- Sub Navigation Bar -->
<div class="psb-subnav-wrapper">
    <div class="container">
        <div class="psb-subnav">
            <a href="{{ route('psb.index') }}" class="psb-subnav-item">
                <i class="fas fa-home-alt"></i> Beranda PSB
            </a>
            <a href="{{ route('psb.syarat') }}" class="psb-subnav-item">
                <i class="fas fa-file-contract"></i> Syarat Pendaftaran
            </a>
            <a href="{{ route('psb.jadwal') }}" class="psb-subnav-item active">
                <i class="fas fa-calendar-alt"></i> Jadwal Pendaftaran
            </a>
            <a href="{{ route('psb.materi') }}" class="psb-subnav-item">
                <i class="fas fa-book-open-reader"></i> Materi Ujian
            </a>
            <a href="{{ route('psb.kontak') }}" class="psb-subnav-item">
                <i class="fas fa-headset"></i> Kontak Informasi
            </a>
        </div>
    </div>
</div>

<section class="section" style="background: var(--off-white); padding: 50px 0 70px;">
    <div class="container">
        <div style="max-width: 960px; margin: 0 auto;">

            <!-- Header Info -->
            <div style="background: white; border-radius: var(--radius-md); padding: 28px 32px; border-left: 5px solid var(--primary); box-shadow: var(--shadow-subtle); margin-bottom: 28px; border: 1px solid var(--border-light); border-left: 5px solid var(--primary);">
                <span style="display: inline-block; background: rgba(153, 27, 27, 0.08); color: var(--primary); font-weight: 700; font-size: 11px; padding: 4px 14px; border-radius: 20px; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 10px;">
                    INFO 02 • Agenda & Waktu Seleksi
                </span>
                <h3 style="font-size: 22px; color: var(--dark); font-weight: 800; margin-bottom: 8px;">Jadwal Gelombang & Tahapan Pendaftaran</h3>
                <p style="color: var(--text-muted); margin: 0; font-size: 14.5px; line-height: 1.65;">
                    Simak jadwal pelaksanaan, tahapan seleksi, dan agenda penting penerimaan santri baru tahun ajaran {{ $psb ? $psb->tahun_ajaran : (date('Y') . '/' . (date('Y')+1)) }}.
                </p>
            </div>

            <!-- Gelombang Pendaftaran Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-bottom: 35px;">
                <!-- Gelombang 1 -->
                <div style="background: #ffffff; border-radius: var(--radius-md); padding: 30px; border: 2px solid var(--primary); position: relative; box-shadow: 0 10px 28px rgba(153, 27, 27, 0.08);">
                    <div style="position: absolute; top: 18px; right: 18px; background: #dcfce7; color: #166534; font-size: 11px; font-weight: 800; padding: 4px 12px; border-radius: 50px; letter-spacing: 0.5px;">
                        @if($psb && $psb->status === 'buka')
                            SEDANG DIBUKA
                        @else
                            GELOMBANG UTAMA
                        @endif
                    </div>
                    <span style="display: block; font-size: 11px; color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 6px;">Tahap I</span>
                    <h4 style="font-size: 20px; font-weight: 800; color: var(--dark); margin-bottom: 16px;">Gelombang 1 (Reguler)</h4>
                    
                    <div style="margin-bottom: 22px; font-size: 14px; color: var(--text-muted); display: flex; flex-direction: column; gap: 12px;">
                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(153, 27, 27, 0.08); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div>
                                <strong style="color: var(--dark);">Pendaftaran:</strong><br>
                                @if($psb)
                                    {{ \Carbon\Carbon::parse($psb->tanggal_buka)->format('d M Y') }} s/d {{ \Carbon\Carbon::parse($psb->tanggal_tutup)->format('d M Y') }}
                                @else
                                    01 Oktober {{ date('Y') }} - 31 Desember {{ date('Y') }}
                                @endif
                            </div>
                        </div>
                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(153, 27, 27, 0.08); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <div>
                                <strong style="color: var(--dark);">Ujian Masuk:</strong><br>
                                Setiap hari Sabtu/Ahad (One Day Service)
                            </div>
                        </div>
                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="width: 32px; height: 32px; border-radius: 8px; background: rgba(153, 27, 27, 0.08); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div>
                                <strong style="color: var(--dark);">Pengumuman:</strong><br>
                                Maksimal 3 hari kerja setelah ujian
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gelombang 2 -->
                <div style="background: #ffffff; border-radius: var(--radius-md); padding: 30px; border: 1px solid var(--border-light); position: relative; box-shadow: var(--shadow-subtle);">
                    <div style="position: absolute; top: 18px; right: 18px; background: #f1f5f9; color: #475569; font-size: 11px; font-weight: 800; padding: 4px 12px; border-radius: 50px; letter-spacing: 0.5px;">
                        KUOTA TERBATAS
                    </div>
                    <span style="display: block; font-size: 11px; color: var(--text-muted); font-weight: 800; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 6px;">Tahap II</span>
                    <h4 style="font-size: 20px; font-weight: 800; color: var(--dark); margin-bottom: 16px;">Gelombang 2 (Lanjutan)</h4>
                    
                    <div style="margin-bottom: 22px; font-size: 14px; color: var(--text-muted); display: flex; flex-direction: column; gap: 12px;">
                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="width: 32px; height: 32px; border-radius: 8px; background: #f1f5f9; color: var(--dark); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="far fa-calendar-alt"></i>
                            </div>
                            <div>
                                <strong style="color: var(--dark);">Pendaftaran:</strong><br>
                                01 Januari {{ date('Y')+1 }} - 30 April {{ date('Y')+1 }}
                            </div>
                        </div>
                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="width: 32px; height: 32px; border-radius: 8px; background: #f1f5f9; color: var(--dark); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <div>
                                <strong style="color: var(--dark);">Ujian Masuk:</strong><br>
                                Sesuai jadwal konfirmasi panitia
                            </div>
                        </div>
                        <div style="display: flex; gap: 12px; align-items: flex-start;">
                            <div style="width: 32px; height: 32px; border-radius: 8px; background: #f1f5f9; color: var(--dark); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div>
                                <strong style="color: var(--dark);">Pengumuman:</strong><br>
                                Maksimal 3 hari kerja setelah ujian
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
