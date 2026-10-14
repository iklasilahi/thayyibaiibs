@extends('layouts.app')
@section('title', 'Kontak Informasi - Penerimaan Santri Baru Pesantren Thayyiba')
@section('content')

<!-- Page Header -->
<div class="psb-page-header">
    <div class="container">
        <span class="psb-page-header-tag"><i class="fas fa-headset"></i> Penerimaan Santri Baru</span>
        <h1>Kontak Informasi</h1>
        <div class="psb-breadcrumb">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Beranda</a>
            <span class="divider">/</span>
            <a href="{{ route('psb.index') }}">PSB</a>
            <span class="divider">/</span>
            <span>Kontak Informasi</span>
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
            <a href="{{ route('psb.jadwal') }}" class="psb-subnav-item">
                <i class="fas fa-calendar-alt"></i> Jadwal Pendaftaran
            </a>
            <a href="{{ route('psb.materi') }}" class="psb-subnav-item">
                <i class="fas fa-book-open-reader"></i> Materi Ujian
            </a>
            <a href="{{ route('psb.kontak') }}" class="psb-subnav-item active">
                <i class="fas fa-headset"></i> Kontak Informasi
            </a>
        </div>
    </div>
</div>

<section class="section" style="background: var(--off-white); padding: 50px 0 70px;">
    <div class="container">
        <div style="max-width: 960px; margin: 0 auto;">

            <!-- Header Info -->
            <div style="background: #ffffff; border-radius: var(--radius-md); padding: 28px 32px; border-left: 5px solid var(--primary); box-shadow: var(--shadow-subtle); margin-bottom: 30px; border: 1px solid var(--border-light); border-left: 5px solid var(--primary);">
                <span style="display: inline-block; background: rgba(153, 27, 27, 0.08); color: var(--primary); font-weight: 700; font-size: 11px; padding: 4px 14px; border-radius: 20px; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 10px;">
                    INFO 04 • Layanan & Konsultasi Resmi
                </span>
                <h3 style="font-size: 22px; color: var(--dark); font-weight: 800; margin-bottom: 8px;">Saluran Komunikasi Resmi PSB Pesantren Thayyiba</h3>
                <p style="color: var(--text-muted); margin: 0; font-size: 14.5px; line-height: 1.65;">
                    Silakan hubungi panitia PSB melalui saluran resmi di bawah ini (WhatsApp, Email, dan Media Sosial Resmi) untuk konsultasi dan informasi lengkap pendaftaran santri baru.
                </p>
            </div>

            <!-- Contact Channels Grid: WA, IG, TikTok, Email, Facebook -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">

                <!-- 1. WhatsApp Hotline 1 -->
                <div class="contact-channel-card" style="border-top: 3px solid #25D366;">
                    <div class="contact-channel-icon" style="background: #dcfce7; color: #16a34a;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div style="flex: 1;">
                        <span style="font-size: 11px; color: #16a34a; font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px;">WhatsApp Hotline 1</span>
                        <h4 style="margin: 4px 0 6px;">Admin Pendaftaran & Berkas</h4>
                        <p style="margin-bottom: 12px; font-size: 13.5px; color: var(--text-muted);">Informasi pendaftaran, validasi berkas, dan tes seleksi.</p>
                        <a href="https://wa.me/6281234567890?text=Assalamu%27alaikum%20Admin%20PSB%20Thayyiba,%20saya%20ingin%20bertanya%20mengenai%20pendaftaran%20santri%20baru." target="_blank" style="display: inline-flex; align-items: center; gap: 8px; background: #25D366; color: #ffffff; padding: 8px 18px; border-radius: var(--radius-full); font-size: 13px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);">
                            <i class="fab fa-whatsapp"></i> Chat WhatsApp
                        </a>
                    </div>
                </div>

                <!-- 2. WhatsApp Hotline 2 -->
                <div class="contact-channel-card" style="border-top: 3px solid #25D366;">
                    <div class="contact-channel-icon" style="background: #dcfce7; color: #16a34a;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div style="flex: 1;">
                        <span style="font-size: 11px; color: #16a34a; font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px;">WhatsApp Hotline 2</span>
                        <h4 style="margin: 4px 0 6px;">Admin Keuangan & Asrama</h4>
                        <p style="margin-bottom: 12px; font-size: 13.5px; color: var(--text-muted);">Konsultasi rincian biaya, kamar santri, dan tata tertib asrama.</p>
                        <a href="https://wa.me/6281234567891?text=Assalamu%27alaikum%20Admin%20Keuangan%20PSB%20Thayyiba,%20saya%20ingin%20konsultasi%20mengenai%20biaya%20dan%20fasilitas." target="_blank" style="display: inline-flex; align-items: center; gap: 8px; background: #25D366; color: #ffffff; padding: 8px 18px; border-radius: var(--radius-full); font-size: 13px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);">
                            <i class="fab fa-whatsapp"></i> Chat WhatsApp
                        </a>
                    </div>
                </div>

                <!-- 3. Instagram -->
                <div class="contact-channel-card" style="border-top: 3px solid #E1306C;">
                    <div class="contact-channel-icon" style="background: #fce7f3; color: #E1306C;">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div style="flex: 1;">
                        <span style="font-size: 11px; color: #E1306C; font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px;">Instagram Resmi</span>
                        <h4 style="margin: 4px 0 6px;">@thayyibaiibs</h4>
                        <p style="margin-bottom: 12px; font-size: 13.5px; color: var(--text-muted);">Dokumentasi harian santri, update kabar terbaru & agenda PSB.</p>
                        <a href="https://instagram.com" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #833AB4, #FD1D1D, #FCAF45); color: #ffffff; padding: 8px 18px; border-radius: var(--radius-full); font-size: 13px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 12px rgba(225, 48, 108, 0.3);">
                            <i class="fab fa-instagram"></i> Ikuti di Instagram
                        </a>
                    </div>
                </div>

                <!-- 4. TikTok -->
                <div class="contact-channel-card" style="border-top: 3px solid #000000;">
                    <div class="contact-channel-icon" style="background: #f1f5f9; color: #000000;">
                        <i class="fab fa-tiktok"></i>
                    </div>
                    <div style="flex: 1;">
                        <span style="font-size: 11px; color: #0f172a; font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px;">TikTok Resmi</span>
                        <h4 style="margin: 4px 0 6px;">@thayyibaiibs</h4>
                        <p style="margin-bottom: 12px; font-size: 13.5px; color: var(--text-muted);">Video edukasi islami, hafalan santri & suasana asrama.</p>
                        <a href="https://tiktok.com" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; background: #000000; color: #ffffff; padding: 8px 18px; border-radius: var(--radius-full); font-size: 13px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);">
                            <i class="fab fa-tiktok"></i> Tonton di TikTok
                        </a>
                    </div>
                </div>

                <!-- 5. Email Resmi -->
                <div class="contact-channel-card" style="border-top: 3px solid var(--primary);">
                    <div class="contact-channel-icon" style="background: rgba(153, 27, 27, 0.08); color: var(--primary);">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div style="flex: 1;">
                        <span style="font-size: 11px; color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px;">Email Resmi</span>
                        <h4 style="margin: 4px 0 6px;">thayyibaiibs@gmail.com</h4>
                        <p style="margin-bottom: 12px; font-size: 13.5px; color: var(--text-muted);">Pengiriman berkas dokumen resmi & surat permohonan kunjungan.</p>
                        <a href="mailto:thayyibaiibs@gmail.com" style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary); color: #ffffff; padding: 8px 18px; border-radius: var(--radius-full); font-size: 13px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 12px rgba(153, 27, 27, 0.25);">
                            <i class="fas fa-paper-plane"></i> Kirim Email
                        </a>
                    </div>
                </div>

                <!-- 6. Facebook -->
                <div class="contact-channel-card" style="border-top: 3px solid #1877F2;">
                    <div class="contact-channel-icon" style="background: #dbeafe; color: #1877F2;">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div style="flex: 1;">
                        <span style="font-size: 11px; color: #1877F2; font-weight: 800; text-transform: uppercase; letter-spacing: 0.8px;">Facebook Page</span>
                        <h4 style="margin: 4px 0 6px;">Pesantren Thayyiba IIBS</h4>
                        <p style="margin-bottom: 12px; font-size: 13.5px; color: var(--text-muted);">Halaman resmi yayasan untuk informasi umum & kegiatan santri.</p>
                        <a href="https://facebook.com" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; background: #1877F2; color: #ffffff; padding: 8px 18px; border-radius: var(--radius-full); font-size: 13px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 12px rgba(24, 119, 242, 0.25);">
                            <i class="fab fa-facebook-f"></i> Kunjungi Facebook
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
