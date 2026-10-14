@extends('layouts.app')
@section('title', 'Syarat Pendaftaran - Penerimaan Santri Baru Pesantren Thayyiba')
@section('content')

<!-- Page Header -->
<div class="psb-page-header">
    <div class="container">
        <span class="psb-page-header-tag"><i class="fas fa-file-contract"></i> Penerimaan Santri Baru</span>
        <h1>Syarat Pendaftaran</h1>
        <div class="psb-breadcrumb">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Beranda</a>
            <span class="divider">/</span>
            <a href="{{ route('psb.index') }}">PSB</a>
            <span class="divider">/</span>
            <span>Syarat Pendaftaran</span>
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
            <a href="{{ route('psb.syarat') }}" class="psb-subnav-item active">
                <i class="fas fa-file-contract"></i> Syarat Pendaftaran
            </a>
            <a href="{{ route('psb.jadwal') }}" class="psb-subnav-item">
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
                    INFO 01 • Ketentuan & Berkas Administrasi
                </span>
                <h3 style="font-size: 22px; color: var(--dark); font-weight: 800; margin-bottom: 8px;">Ketentuan & Dokumen Calon Santri Baru</h3>
                <p style="color: var(--text-muted); margin: 0; font-size: 14.5px; line-height: 1.65;">
                    Mohon persiapkan seluruh persyaratan administrasi dan ketentuan calon santri di bawah ini dengan cermat dan seksama sebelum mengikuti rangkaian seleksi Pesantren Thayyiba.
                </p>
            </div>

            <!-- Database Custom Persyaratan jika ada -->
            @if($psb && $psb->persyaratan)
            <div class="psb-content-card" style="border: 1px solid #FFE082; background: #FFFDE7;">
                <h3 style="color: #E65100; border-bottom: 2px solid #FFE082;">
                    <i class="fas fa-bullhorn" style="color: #FB8C00;"></i> Pengumuman Khusus Panitia
                </h3>
                <div style="font-size: 15px; color: #4E342E; line-height: 1.8;">
                    {!! nl2br(e($psb->persyaratan)) !!}
                </div>
            </div>
            @endif

            <!-- 1. Dokumen Administrasi -->
            <div class="psb-content-card">
                <h3><i class="fas fa-folder-open"></i> 1. Dokumen Administrasi Calon Santri</h3>
                <p style="color: var(--gray-600); margin-bottom: 20px; font-size: 14px;">
                    Dokumen dibawa saat pelaksanaan tes seleksi atau diunggah jika diminta panitia:
                </p>
                <ul class="psb-list-check">
                    <li>Fotokopi <strong>Akta Kelahiran</strong> calon santri (sebanyak 3 lembar).</li>
                    <li>Fotokopi <strong>Kartu Keluarga (KK)</strong> terbaru (sebanyak 3 lembar).</li>
                    <li>Fotokopi <strong>KTP kedua Orang Tua / Wali</strong> (sebanyak 2 lembar).</li>
                    <li>Fotokopi <strong>Ijazah / Surat Keterangan Lulus (SKL)</strong> yang telah dilegalisir (3 lembar, dapat menyusul jika belum terbit).</li>
                    <li>Fotokopi <strong>Rapor jenjang sebelumnya</strong> (2 semester terakhir yang telah dilegalisir).</li>
                    <li><strong>Pas foto terbaru</strong> formal berlatar belakang merah:
                        <ul style="list-style: disc; margin: 6px 0 6px 20px; color: var(--gray-700); font-size: 14px;">
                            <li>Santri Putra: Baju putih berkopiah hitam (Ukuran 3x4 = 4 lembar, 4x6 = 2 lembar)</li>
                            <li>Santri Putri: Baju muslimah putih berjilbab putih (Ukuran 3x4 = 4 lembar, 4x6 = 2 lembar)</li>
                        </ul>
                    </li>
                    <li><strong>Surat Keterangan Sehat</strong> dan bebas dari penyakit menular/kronis dari dokter atau Puskesmas setempat.</li>
                    <li>Nomor Induk Siswa Nasional (<strong>NISN</strong>) yang valid dan terdaftar di Dapodik/EMIS.</li>
                </ul>
            </div>

            <!-- 2. Persyaratan Umum Calon Santri -->
            <div class="psb-content-card">
                <h3><i class="fas fa-user-check"></i> 2. Kriteria & Persyaratan Umum</h3>
                <ul class="psb-list-check">
                    <li><strong>Beragama Islam</strong> dan memiliki niat tulus untuk mendalami ilmu agama dan Al-Qur'an atas kemauan sendiri tanpa paksaan pihak lain.</li>
                    <li>Telah menyelesaikan pendidikan jenjang sebelumnya (Lulus SD/MI untuk jenjang SMP, atau Lulus SMP/MTs untuk jenjang SMA).</li>
                    <li><strong>Mampu membaca Al-Qur'an</strong> (dasar tajwid dan kelancaran makharijul huruf).</li>
                    <li><strong>Siap tinggal di asrama</strong> (Islamic Boarding School) dan sanggup menaati seluruh tata tertib dan disiplin pesantren selama masa studi.</li>
                    <li>Tidak memiliki riwayat merokok, pergaulan bebas, narkoba, atau tindak kriminal.</li>
                    <li>Siap mengikuti seluruh rangkaian tes seleksi masuk yang diadakan panitia PSB.</li>
                </ul>
            </div>

            <!-- 3. Persyaratan Orang Tua / Wali -->
            <div class="psb-content-card">
                <h3><i class="fas fa-hands-holding-child"></i> 3. Ketentuan Orang Tua / Wali Santri</h3>
                <ul class="psb-list-check">
                    <li>Mendukung penuh visi, misi, dan sistem pendidikan pesantren.</li>
                    <li>Hadir mendampingi calon santri pada saat pelaksanaan wawancara orang tua/wali santri.</li>
                    <li>Bersedia menandatangani <strong>Surat Pernyataan Komitmen</strong> wali santri dan mematuhi tata tertib asrama serta aturan kunjungan (sambangan).</li>
                    <li>Berkomitmen untuk menunaikan kewajiban pembiayaan pendidikan tepat pada waktu yang ditentukan.</li>
                </ul>
            </div>

            <!-- 4. Prosedur Pendaftaran -->
            @if($psb && $psb->prosedur)
            <div class="psb-content-card">
                <h3><i class="fas fa-route"></i> 4. Prosedur & Alur Pendaftaran</h3>
                <div style="font-size: 15px; color: var(--gray-700); line-height: 1.8;">
                    {!! nl2br(e($psb->prosedur)) !!}
                </div>
            </div>
            @else
            <div class="psb-content-card">
                <h3><i class="fas fa-route"></i> 4. Prosedur Pendaftaran</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-top: 15px;">
                    <div style="background: var(--off-white); padding: 18px; border-radius: var(--radius-md); border-left: 4px solid var(--primary);">
                        <strong style="color: var(--primary); display: block; margin-bottom: 6px;">Langkah 1</strong>
                        <p style="font-size: 13px; color: var(--gray-700); margin: 0;">Mengisi formulir pendaftaran online di website resmi.</p>
                    </div>
                    <div style="background: var(--off-white); padding: 18px; border-radius: var(--radius-md); border-left: 4px solid var(--primary);">
                        <strong style="color: var(--primary); display: block; margin-bottom: 6px;">Langkah 2</strong>
                        <p style="font-size: 13px; color: var(--gray-700); margin: 0;">Mendapat konfirmasi nomor pendaftaran melalui WhatsApp.</p>
                    </div>
                    <div style="background: var(--off-white); padding: 18px; border-radius: var(--radius-md); border-left: 4px solid var(--primary);">
                        <strong style="color: var(--primary); display: block; margin-bottom: 6px;">Langkah 3</strong>
                        <p style="font-size: 13px; color: var(--gray-700); margin: 0;">Mengikuti ujian seleksi & wawancara sesuai jadwal.</p>
                    </div>
                    <div style="background: var(--off-white); padding: 18px; border-radius: var(--radius-md); border-left: 4px solid var(--primary);">
                        <strong style="color: var(--primary); display: block; margin-bottom: 6px;">Langkah 4</strong>
                        <p style="font-size: 13px; color: var(--gray-700); margin: 0;">Pengumuman hasil seleksi dan proses daftar ulang.</p>
                    </div>
                </div>
            </div>
            @endif

            <!-- 5. Rincian Biaya -->
            @if($psb && $psb->biaya)
            <div class="psb-content-card">
                <h3><i class="fas fa-coins"></i> 5. Estimasi & Rincian Biaya</h3>
                <div style="font-size: 15px; color: var(--gray-700); line-height: 1.8;">
                    {!! nl2br(e($psb->biaya)) !!}
                </div>
            </div>
            @endif

            <!-- CTA Banner -->
            <div class="psb-cta-banner">
                <div>
                    <h3>Ada Pertanyaan Terkait Persyaratan?</h3>
                    <p>Hubungi panitia PSB untuk konfirmasi kelengkapan berkas dan informasi pendaftaran santri baru.</p>
                </div>
                <div style="display: flex; gap: 12px; flex-shrink: 0; flex-wrap: wrap;">
                    <a href="{{ route('psb.kontak') }}" class="psb-btn-primary">
                        <i class="fab fa-whatsapp"></i> Hubungi Panitia PSB
                    </a>
                    @if($psb && $psb->brosur)
                    <a href="{{ asset('storage/' . $psb->brosur) }}" target="_blank" class="psb-btn-outline">
                        <i class="fas fa-download"></i> Brosur
                    </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
