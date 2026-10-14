@extends('layouts.app')
@section('title', 'Materi Ujian Seleksi - Penerimaan Santri Baru Pesantren Thayyiba')
@section('content')

<!-- Page Header -->
<div class="psb-page-header">
    <div class="container">
        <span class="psb-page-header-tag"><i class="fas fa-book-open-reader"></i> Penerimaan Santri Baru</span>
        <h1>Materi Ujian Seleksi</h1>
        <div class="psb-breadcrumb">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Beranda</a>
            <span class="divider">/</span>
            <a href="{{ route('psb.index') }}">PSB</a>
            <span class="divider">/</span>
            <span>Materi Ujian</span>
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
            <a href="{{ route('psb.materi') }}" class="psb-subnav-item active">
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
                    INFO 03 • Panduan & Kisi-kisi Seleksi
                </span>
                <h3 style="font-size: 22px; color: var(--dark); font-weight: 800; margin-bottom: 8px;">Daftar Materi Ujian Masuk Calon Santri</h3>
                <p style="color: var(--text-muted); margin: 0; font-size: 14.5px; line-height: 1.65;">
                    Ujian seleksi bertujuan untuk memetakan potensi kemampuan Al-Qur'an, dasar akademik, dan kesiapan mental ananda untuk hidup mandiri di lingkungan pesantren.
                </p>
            </div>

            <!-- 5 Materi Ujian Cards Grid -->
            <div class="materi-grid" style="margin-bottom: 30px;">
                <!-- Materi 1 -->
                <div class="materi-card">
                    <div class="materi-card-header">
                        <div class="materi-icon">
                            <i class="fas fa-quran"></i>
                        </div>
                        <div>
                            <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Materi 01</span>
                            <h4>Baca & Tulis Al-Qur'an (BTQ)</h4>
                        </div>
                    </div>
                    <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                        Penilaian kefasihan membaca Al-Qur'an sesuai kaidah tajwid dan kelancaran menulis ayat pendek.
                    </p>
                    <ul class="psb-list-check" style="font-size: 13px;">
                        <li>Kelancaran tilawah (makhorijul huruf & shifatul huruf).</li>
                        <li>Penerapan hukum tajwid dasar (Nun sukun, Tanwin, Mim sukun, Mad).</li>
                        <li>Menulis ayat pendek Al-Qur'an (dikte/imla' huruf hijaiyah bersambung).</li>
                    </ul>
                </div>

                <!-- Materi 2 -->
                <div class="materi-card">
                    <div class="materi-card-header">
                        <div class="materi-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div>
                            <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Materi 02</span>
                            <h4>Tes Hafalan Al-Qur'an (Tahfidz)</h4>
                        </div>
                    </div>
                    <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                        Menguji hafalan yang telah dimiliki calon santri serta daya tangkap daya ingat terhadap hafalan baru.
                    </p>
                    <ul class="psb-list-check" style="font-size: 13px;">
                        <li>Menyimak hafalan yang telah dimiliki (minimal Juz 30 / surat pilihan).</li>
                        <li>Tes sambung ayat (penguji membaca potongan ayat lalu dilanjutkan).</li>
                        <li>Tes daya rekam hafalan baru (menghafal 3-5 baris ayat baru dalam waktu tertentu).</li>
                    </ul>
                </div>

                <!-- Materi 3 -->
                <div class="materi-card">
                    <div class="materi-card-header">
                        <div class="materi-icon">
                            <i class="fas fa-mosque"></i>
                        </div>
                        <div>
                            <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Materi 03</span>
                            <h4>Praktik Ibadah & Agama Islam</h4>
                        </div>
                    </div>
                    <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                        Pengujian keterampilan praktik ibadah fardhu sehari-hari dan pengetahuan dasar keislaman.
                    </p>
                    <ul class="psb-list-check" style="font-size: 13px;">
                        <li>Praktik wudhu yang benar dan doa setelah wudhu.</li>
                        <li>Praktik shalat fardhu beserta bacaan tasyahhud dan doa qunut.</li>
                        <li>Hafalan doa harian (doa makan, tidur, keluar rumah, kedua orang tua).</li>
                        <li>Pemahaman rukun iman dan rukun islam.</li>
                    </ul>
                </div>

                <!-- Materi 4 -->
                <div class="materi-card">
                    <div class="materi-card-header">
                        <div class="materi-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div>
                            <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Materi 04</span>
                            <h4>Tes Kemampuan Akademik Dasar</h4>
                        </div>
                    </div>
                    <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 12px;">
                        Tes tertulis dasar untuk memetakan kesiapan kurikulum akademik umum di sekolah formal.
                    </p>
                    <ul class="psb-list-check" style="font-size: 13px;">
                        <li><strong>Matematika Dasar:</strong> Berhitung cepat, pecahan sederhana, dan logika angka.</li>
                        <li><strong>Bahasa Indonesia:</strong> Pemahaman bacaan, EYD, dan kosa kata.</li>
                        <li><strong>Bahasa Inggris Dasar:</strong> Kosakata umum harian (Basic vocabulary).</li>
                    </ul>
                </div>
            </div>

            <!-- Materi 5 Wawancara Full Width -->
            <div class="psb-content-card">
                <div style="display: flex; gap: 20px; align-items: flex-start; flex-wrap: wrap;">
                    <div style="width: 56px; height: 56px; border-radius: 16px; background: var(--primary-bg); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 24px; flex-shrink: 0;">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div style="flex: 1;">
                        <span style="font-size: 11px; color: var(--primary); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Materi 05</span>
                        <h4 style="font-size: 20px; font-weight: 700; color: var(--gray-900); margin-bottom: 8px;">Wawancara Psikologis & Kesiapan Santri serta Orang Tua</h4>
                        <p style="font-size: 14px; color: var(--gray-600); line-height: 1.6; margin-bottom: 16px;">
                            Sesi dialog interaktif untuk menilai kesungguhan, karakter, kemandirian anak, serta keselarasan visi orang tua dengan nilai-nilai pesantren.
                        </p>

                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px;">
                            <div style="background: var(--off-white); padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--primary);">
                                <strong style="display: block; color: var(--primary-dark); margin-bottom: 6px; font-size: 15px;">Wawancara Calon Santri:</strong>
                                <ul style="margin: 0; padding-left: 18px; font-size: 13px; color: var(--gray-700); line-height: 1.6;">
                                    <li>Motivasi masuk pondok pesantren.</li>
                                    <li>Kesiapan berpisah dari gadget & keluarga.</li>
                                    <li>Pola sosialisasi dan interaksi sosial anak.</li>
                                </ul>
                            </div>
                            <div style="background: var(--off-white); padding: 18px; border-radius: var(--radius-md); border-left: 3px solid var(--gold);">
                                <strong style="display: block; color: var(--primary-dark); margin-bottom: 6px; font-size: 15px;">Wawancara Orang Tua / Wali:</strong>
                                <ul style="margin: 0; padding-left: 18px; font-size: 13px; color: var(--gray-700); line-height: 1.6;">
                                    <li>Visi pengasuhan keluarga.</li>
                                    <li>Komitmen mendukung tata tertib pesantren.</li>
                                    <li>Kesiapan mendukung kemandirian anak.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips & Panduan Belajar Calon Santri -->
            <div class="psb-content-card">
                <h3><i class="fas fa-lightbulb"></i> Tips & Panduan Sukses Seleksi PSB</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
                    <div style="background: #E8F5E9; padding: 20px; border-radius: var(--radius-md);">
                        <strong style="color: #2E7D32; display: block; font-size: 15px; margin-bottom: 6px;">1. Rutinkan Tilawah Harian</strong>
                        <p style="font-size: 13px; color: #1B5E20; margin: 0; line-height: 1.5;">Latih membaca Al-Qur'an 1-2 lembar setiap hari dengan tartil dan perhatikan panjang-pendek tajwid.</p>
                    </div>
                    <div style="background: #FFF8E1; padding: 20px; border-radius: var(--radius-md);">
                        <strong style="color: #F57F17; display: block; font-size: 15px; margin-bottom: 6px;">2. Muraja'ah Hafalan Juz 30</strong>
                        <p style="font-size: 13px; color: #E65100; margin: 0; line-height: 1.5;">Ulangi surat-surat pendek yang sudah dihafal secara berulang agar mutqin dan lancar saat diuji.</p>
                    </div>
                    <div style="background: #E3F2FD; padding: 20px; border-radius: var(--radius-md);">
                        <strong style="color: #1565C0; display: block; font-size: 15px; margin-bottom: 6px;">3. Bangun Kesiapan Mental</strong>
                        <p style="font-size: 13px; color: #0D47A1; margin: 0; line-height: 1.5;">Orang tua diharapkan memberikan motivasi positif tentang serunya teman baru dan keberkahan mondok.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Banner -->
            <div class="psb-cta-banner">
                <div>
                    <h3>Siap Menghadapi Seleksi PSB?</h3>
                    <p>Dapatkan informasi jadwal bimbingan dan materi seleksi lebih lengkap dari panitia Pesantren Thayyiba.</p>
                </div>
                <div style="display: flex; gap: 12px; flex-shrink: 0; flex-wrap: wrap;">
                    <a href="{{ route('psb.kontak') }}" class="psb-btn-primary">
                        <i class="fab fa-whatsapp"></i> Hubungi Panitia PSB
                    </a>
                    <a href="{{ route('psb.syarat') }}" class="psb-btn-outline">
                        <i class="fas fa-file-contract"></i> Lihat Syarat Pendaftaran
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
