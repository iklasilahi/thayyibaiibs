@extends('layouts.app')

@section('title', 'Beranda')
@section('meta_description', 'Pesantren Modern Thayyiba - Lembaga Pendidikan Islam Unggul dengan Program Tahfidz Al-Qur\'an, Kitab Kuning, Bahasa Internasional, dan Fasilitas Modern Terlengkap.')

@section('styles')
<style>
    /* ===== HERO SLIDER SECTION ===== */
    .hero-wrapper {
        position: relative;
        background: #090e17;
        width: 100%;
        overflow: hidden;
    }

    .hero-video-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        min-width: 100%;
        min-height: 100%;
        transform: translate(-50%, -50%);
        object-fit: cover;
        z-index: 0;
        pointer-events: none;
        opacity: 0.65;
    }

    .swiper-hero {
        position: relative;
        z-index: 2;
        width: 100%;
        min-height: 580px;
        height: calc(100vh - 120px);
        max-height: 720px;
    }

    @media (max-width: 768px) {
        .swiper-hero {
            height: auto;
            min-height: 480px;
            max-height: none;
        }
    }

    .hero-slide {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 0;
        box-sizing: border-box;
    }

    .hero-bg-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.82) 0%, rgba(127, 29, 29, 0.70) 50%, rgba(15, 23, 42, 0.85) 100%);
        z-index: 1;
    }

    .hero-ambient-pattern {
        position: absolute;
        right: -4%;
        top: 50%;
        transform: translateY(-50%);
        font-family: 'Amiri', serif;
        font-size: clamp(200px, 25vw, 380px);
        color: rgba(255, 255, 255, 0.03);
        user-select: none;
        pointer-events: none;
        z-index: 1;
        line-height: 1;
    }

    .hero-slide-content {
        position: relative;
        z-index: 2;
        max-width: 820px;
        margin: 0 auto;
        text-align: center;
        color: #ffffff;
    }

    .hero-pill-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(251, 191, 36, 0.35);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 7px 22px;
        border-radius: var(--radius-full);
        font-size: 0.85rem;
        font-weight: 700;
        color: #fef08a;
        margin: 0 auto 22px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .hero-pill-badge i { color: #f59e0b; }

    .hero-heading {
        font-family: 'Playfair Display', serif;
        font-size: clamp(2.2rem, 5vw, 3.8rem);
        font-weight: 800;
        line-height: 1.22;
        margin-bottom: 18px;
        color: #ffffff;
        letter-spacing: -0.5px;
    }

    .hero-heading .gold-text {
        background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-subtext {
        font-size: clamp(0.95rem, 1.6vw, 1.15rem);
        color: #e2e8f0;
        line-height: 1.75;
        margin: 0 auto 32px;
        max-width: 680px;
    }

    .hero-btn-group {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .hero-btn-primary {
        background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
        color: #ffffff;
        padding: 13px 30px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 0.95rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 6px 20px rgba(220, 38, 38, 0.4);
        transition: var(--transition);
    }

    .hero-btn-primary:hover {
        transform: translateY(-2px);
        color: #ffffff;
    }

    .hero-btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        border: 1.5px solid rgba(255, 255, 255, 0.35);
        color: #ffffff;
        padding: 13px 28px;
        border-radius: var(--radius-full);
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: var(--transition);
    }

    .hero-btn-secondary:hover {
        background: #ffffff;
        color: var(--primary);
        border-color: #ffffff;
    }

    /* Swiper Navigation */
    .swiper-button-next, .swiper-button-prev {
        color: #ffffff !important;
        width: 44px !important;
        height: 44px !important;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        transition: var(--transition);
    }

    .swiper-button-next:hover, .swiper-button-prev:hover {
        background: var(--primary);
        border-color: var(--primary);
    }

    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 1rem !important;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .swiper-button-next, .swiper-button-prev { display: none !important; }
    }

    /* ===== SECTIONS GLOBAL ===== */
    .section-py { padding: 80px 0; }

    /* About Section */
    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .about-image-card {
        position: relative;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-card);
    }

    .about-image-card img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        display: block;
    }

    .about-float-badge {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        padding: 16px 20px;
        border-radius: var(--radius-md);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        border: 1px solid rgba(220, 38, 38, 0.15);
        text-align: center;
    }

    .about-float-badge strong {
        font-size: 1.8rem;
        color: var(--primary);
        font-weight: 800;
        line-height: 1;
        display: block;
    }

    .about-float-badge span {
        font-size: 0.72rem;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--text-muted);
    }

    .about-features-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-top: 25px;
    }

    .about-feature-box {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 14px;
        background: #ffffff;
        border-radius: var(--radius-md);
        border: 1px solid var(--border-light);
        transition: all 0.25s ease;
    }

    .about-feature-box:hover {
        border-color: rgba(153, 27, 27, 0.3);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transform: translateY(-2px);
    }

    .about-feature-num {
        width: 28px;
        height: 28px;
        min-width: 28px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary) 0%, #b91c1c 100%);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.8rem;
        flex-shrink: 0;
    }

    .about-feature-box i {
        color: var(--primary);
        font-size: 1.2rem;
        margin-top: 2px;
    }

    /* Program Grid */
    .programs-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }

    .program-lux-card {
        background: #ffffff;
        border-radius: var(--radius-lg);
        padding: 30px 22px;
        border: 1px solid var(--border-light);
        box-shadow: var(--shadow-subtle);
        transition: var(--transition);
        display: flex;
        flex-direction: column;
    }

    .program-lux-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-card);
        border-color: rgba(220, 38, 38, 0.25);
    }

    .program-icon-box {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        background: #fef2f2;
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        margin-bottom: 18px;
    }

    .program-lux-card h3 {
        font-size: 1.18rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 10px;
    }

    .program-lux-card p {
        color: var(--text-muted);
        font-size: 0.9rem;
        line-height: 1.65;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .program-arrow-link {
        color: var(--primary);
        font-weight: 700;
        font-size: 0.85rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    /* Fasilitas Grid */
    .fasilitas-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .fasilitas-lux-card {
        background: #ffffff;
        padding: 24px;
        border-radius: var(--radius-md);
        border: 1px solid var(--border-light);
        box-shadow: var(--shadow-subtle);
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .fasilitas-icon-circle {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #fef2f2;
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
    }

    /* Founders Grid */
    .founders-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }

    .founder-lux-card {
        background: #ffffff;
        border-radius: var(--radius-lg);
        padding: 28px 20px;
        text-align: center;
        border: 1px solid var(--border-light);
        box-shadow: var(--shadow-subtle);
    }

    .founder-avatar-wrap {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto 16px;
        padding: 3px;
        background: linear-gradient(135deg, #fee2e2 0%, var(--primary-light) 100%);
    }

    .founder-avatar-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .founder-avatar-fallback {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: var(--primary);
    }

    .founder-lux-card h3 {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 4px;
    }

    .founder-role-badge {
        display: inline-block;
        background: #fef2f2;
        color: var(--primary);
        font-size: 0.75rem;
        font-weight: 700;
        padding: 3px 12px;
        border-radius: var(--radius-full);
        margin-bottom: 12px;
    }

    /* News Grid */
    .news-lux-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
    }

    .news-lux-card {
        background: #ffffff;
        border-radius: var(--radius-lg);
        overflow: hidden;
        border: 1px solid var(--border-light);
        box-shadow: var(--shadow-subtle);
        display: flex;
        flex-direction: column;
    }

    .news-cover-wrap {
        position: relative;
        overflow: hidden;
    }

    .news-cover-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    .news-category-tag {
        position: absolute;
        top: 12px;
        left: 12px;
        background: var(--primary);
        color: #ffffff;
        font-size: 0.72rem;
        font-weight: 700;
        padding: 3px 12px;
        border-radius: var(--radius-full);
        text-transform: uppercase;
    }

    .news-content-box {
        padding: 22px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .news-meta-row {
        display: flex;
        gap: 12px;
        font-size: 0.8rem;
        color: var(--text-muted);
        margin-bottom: 10px;
    }

    .news-content-box h3 {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--dark);
        line-height: 1.4;
        margin-bottom: 10px;
    }

    .news-content-box h3 a {
        color: inherit;
        text-decoration: none;
    }

    /* CTA Banner */
    .cta-banner {
        background: linear-gradient(135deg, #7f1d1d 0%, #991b1b 50%, #b91c1c 100%);
        border-radius: var(--radius-lg);
        padding: 60px 40px;
        color: #ffffff;
        text-align: center;
        box-shadow: 0 16px 40px rgba(127, 29, 29, 0.25);
    }

    .cta-banner h2 {
        font-family: 'Playfair Display', serif;
        font-size: clamp(1.8rem, 3.5vw, 2.8rem);
        font-weight: 800;
        margin-bottom: 14px;
    }

    .cta-banner p {
        font-size: 1.05rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 620px;
        margin: 0 auto 30px;
        line-height: 1.7;
    }

    /* ===== RESPONSIVE UTILITIES (TABLET & HP) ===== */
    @media (max-width: 991px) {
        .section-py { padding: 60px 0; }
        .hero-slide { text-align: center; }
        .hero-slide-content { margin: 0 auto; }
        .hero-btn-group { justify-content: center; }
        .hero-ambient-pattern { display: none; }
        .about-grid { grid-template-columns: 1fr; gap: 35px; }
        .programs-grid { grid-template-columns: repeat(2, 1fr); }
        .fasilitas-grid { grid-template-columns: repeat(2, 1fr); }
        .founders-grid { grid-template-columns: repeat(2, 1fr); }
        .news-lux-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 640px) {
        .section-py { padding: 45px 0; }
        .about-features-grid { grid-template-columns: 1fr; gap: 10px; }
        .about-image-card img { height: 260px; }

        .programs-grid { grid-template-columns: 1fr; gap: 16px; }
        .fasilitas-grid { grid-template-columns: 1fr; gap: 14px; }
        .founders-grid { grid-template-columns: 1fr; gap: 16px; }
        .news-lux-grid { grid-template-columns: 1fr; gap: 18px; }

        .hero-btn-group {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }

        .hero-btn-primary, .hero-btn-secondary {
            width: 100%;
            justify-content: center;
            padding: 13px 20px;
        }

        .cta-banner { padding: 35px 20px; }
        .cta-banner .btn { width: 100%; }
    }
</style>
@endsection

@section('content')

<!-- ===== HERO SLIDER SECTION ===== -->
<section class="hero-wrapper">
    @if(file_exists(public_path('videos/hero.mp4')))
        <video class="hero-video-bg" autoplay muted loop playsinline poster="{{ asset('images/hero-poster.jpg') }}">
            <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
        </video>
    @endif

    <div class="swiper swiper-hero">
        <div class="swiper-wrapper">
            @forelse($sliders as $slider)
            <div class="swiper-slide">
                <div class="hero-slide">
                    <div class="hero-bg-overlay"></div>
                    <div class="hero-ambient-pattern">ط</div>
                    <div class="container">
                        <div class="hero-slide-content">
                            <div class="hero-pill-badge">
                                <i class="fas fa-certificate"></i>
                                <span>Pondok Pesantren Terakreditasi Unggul</span>
                            </div>
                            <h1 class="hero-heading">
                                {{ $slider->judul }}
                            </h1>
                            <p class="hero-subtext">
                                {{ $slider->subjudul ?: 'Menyiapkan generasi rabbani berjiwa santri, berwawasan global, dan berintegritas tinggi dalam naungan rahmat Allah Subhanahu wa Ta\'ala.' }}
                            </p>
                            <div class="hero-btn-group">
                                <a href="{{ route('psb.index') }}" class="hero-btn-primary">
                                    <i class="fas fa-circle-info"></i> PSB
                                </a>
                                <a href="{{ route('profil.sejarah') }}" class="hero-btn-secondary">
                                    <i class="fas fa-compass"></i> Jelajahi Pesantren
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="swiper-slide">
                <div class="hero-slide">
                    <div class="hero-bg-overlay"></div>
                    <div class="hero-ambient-pattern">ط</div>
                    <div class="container">
                        <div class="hero-slide-content">
                            <div class="hero-pill-badge">
                                <i class="fas fa-certificate"></i>
                                <span>Pondok Pesantren Terakreditasi Unggul</span>
                            </div>
                            <h1 class="hero-heading">
                                Selamat Datang di <span class="gold-text">Pesantren Thayyiba</span>
                            </h1>
                            <p class="hero-subtext">
                                Membentuk Generasi Berilmu, Berakhlak Mulia, Berjiwa Pemimpin, dan Mahir Berbahasa Asing dengan Fasilitas Modern.
                            </p>
                            <div class="hero-btn-group">
                                <a href="{{ route('psb.index') }}" class="hero-btn-primary">
                                    <i class="fas fa-circle-info"></i> PSB
                                </a>
                                <a href="{{ route('profil.sejarah') }}" class="hero-btn-secondary">
                                    <i class="fas fa-compass"></i> Profil Pesantren
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- ===== ABOUT / SAMBUTAN SECTION ===== -->
<section class="section-py" style="background: #ffffff;">
    <div class="container">
        <div class="about-grid">
            <div class="about-image-card">
                <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?auto=format&fit=crop&w=1000&q=80" alt="Pesantren Thayyiba Campus">
                <div class="about-float-badge">
                    <strong>20+</strong>
                    <span>Tahun Berkhidmat</span>
                </div>
            </div>

            <div>
                <span class="section-badge">
                    <i class="fas fa-landmark"></i> Tentang Pesantren Thayyiba
                </span>
                <h2 class="section-title">
                    8 Keunggulan <span>Thayyiba</span>
                </h2>

                <div class="about-features-grid">
                    <div class="about-feature-box">
                        <span class="about-feature-num">1</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Sadar Sholat dan Ibadah</strong>
                        </div>
                    </div>
                    <div class="about-feature-box">
                        <span class="about-feature-num">2</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Bina Akhlak Mulia</strong>
                        </div>
                    </div>
                    <div class="about-feature-box">
                        <span class="about-feature-num">3</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Tahfidz 30 Juz Al-Qur'an & 100 Hadits Pilihan</strong>
                        </div>
                    </div>
                    <div class="about-feature-box">
                        <span class="about-feature-num">4</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Terampil Berkomunikasi Bahasa Al-Qur'an & Bahasa Inggris</strong>
                        </div>
                    </div>
                    <div class="about-feature-box">
                        <span class="about-feature-num">5</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Menguasai Dasar-dasar Ulum Syar'i & Kauni</strong>
                        </div>
                    </div>
                    <div class="about-feature-box">
                        <span class="about-feature-num">6</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Entrepreneurship</strong>
                        </div>
                    </div>
                    <div class="about-feature-box">
                        <span class="about-feature-num">7</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Leadership</strong>
                        </div>
                    </div>
                    <div class="about-feature-box">
                        <span class="about-feature-num">8</span>
                        <div>
                            <strong style="display:block; font-size:0.9rem; color:var(--dark);">Berjiwa Riset</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PROGRAM PENDIDIKAN UNGGULAN ===== -->
<section class="section-py" style="background: #f8fafc;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-graduation-cap"></i> Kurikulum Terpadu</span>
            <h2 class="section-title">Program Pendidikan <span>Pilihan Utama</span></h2>
            <p class="section-desc">Pilihan program terintegrasi yang dirancang khusus untuk membangun potensi intelektual, spiritual, dan keterampilan global para santri.</p>
        </div>

        <div class="programs-grid">
            @forelse($programs as $prog)
            <div class="program-lux-card">
                <div class="program-icon-box">
                    <i class="fas {{ $prog->ikon ?: 'fa-graduation-cap' }}"></i>
                </div>
                <h3>{{ $prog->nama }}</h3>
                <p>{{ Str::limit($prog->deskripsi, 110) }}</p>
                <a href="{{ route('program.show', $prog->slug) }}" class="program-arrow-link">
                    Pelajari Kurikulum <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            @empty
            <div class="program-lux-card">
                <div class="program-icon-box"><i class="fas fa-book-quran"></i></div>
                <h3>Tahfidz Al-Qur'an 30 Juz</h3>
                <p>Program bimbingan menghafal Al-Qur'an mutqin dengan metode ziyadah dan muroja'ah intensif.</p>
                <a href="{{ route('program.index') }}" class="program-arrow-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- ===== FASILITAS KAMPUS MODERN ===== -->
<section class="section-py" style="background: #ffffff;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-building-columns"></i> Sarana & Prasarana</span>
            <h2 class="section-title">Fasilitas Berstandar <span>Modern & Asri</span></h2>
            <p class="section-desc">Lingkungan belajar kondusif dengan fasilitas komprehensif demi mendukung kenyamanan ibadah dan studi santri.</p>
        </div>

        <div class="fasilitas-grid">
            @forelse($fasilitass as $fasilitas)
            <div class="fasilitas-lux-card">
                <div class="fasilitas-icon-circle">
                    <i class="fas {{ $fasilitas->ikon ?: 'fa-building' }}"></i>
                </div>
                <div>
                    <h4 style="font-size:1.05rem; font-weight:700; color:var(--dark); margin-bottom:4px;">{{ $fasilitas->nama }}</h4>
                    <p style="font-size:0.88rem; color:var(--text-muted); line-height:1.6; margin:0;">{{ Str::limit($fasilitas->deskripsi, 80) }}</p>
                </div>
            </div>
            @empty
            <p style="grid-column: 1/-1; text-align:center; color:var(--text-muted);">Data fasilitas segera hadir.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- ===== DEWAN PENDIRI & PENGASUH ===== -->
<section class="section-py" style="background: #f8fafc;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-users"></i> Pimpinan & Tokoh</span>
            <h2 class="section-title">Dewan Pendiri & <span>Pengasuh Pesantren</span></h2>
            <p class="section-desc">Para ulama, asatidz, dan cendekiawan muslim yang membimbing santri dengan keteladanan akhlak dan keikhlasan.</p>
        </div>

        <div class="founders-grid">
            @forelse($pendirs as $pendir)
            <div class="founder-lux-card">
                <div class="founder-avatar-wrap">
                    @if($pendir->foto && \Storage::disk('public')->exists($pendir->foto))
                        <img src="{{ asset('storage/' . $pendir->foto) }}" alt="{{ $pendir->nama }}">
                    @else
                        <div class="founder-avatar-fallback">
                            <i class="fas fa-user-tie"></i>
                        </div>
                    @endif
                </div>
                <h3>{{ $pendir->nama }}</h3>
                <span class="founder-role-badge">{{ $pendir->jabatan }}</span>
                <p style="font-size:0.85rem; color:var(--text-muted); line-height:1.6; margin:0;">
                    {{ Str::limit($pendir->deskripsi, 85) ?: 'Berdedikasi dalam pembinaan karakter santri dan pengembangan dakwah Islamiyah.' }}
                </p>
            </div>
            @empty
            <p style="grid-column: 1/-1; text-align:center; color:var(--text-muted);">Data pengasuh segera hadir.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- ===== BERITA & ARTIKEL TERBARU ===== -->
<section class="section-py" style="background: #ffffff;">
    <div class="container">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:40px; flex-wrap:wrap; gap:16px;">
            <div>
                <span class="section-badge"><i class="fas fa-newspaper"></i> Warta & Kabar</span>
                <h2 class="section-title" style="margin-bottom:0;">Berita & Kegiatan <span>Terkini</span></h2>
            </div>
            <a href="{{ route('berita.index') }}" class="btn btn-outline" style="font-size:0.88rem; padding:10px 22px;">
                Semua Berita <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="news-lux-grid">
            @forelse($beritas as $item)
            <div class="news-lux-card">
                <div class="news-cover-wrap">
                    <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=700&q=80' }}" alt="{{ $item->judul }}" class="news-cover-img">
                    <span class="news-category-tag">{{ $item->kategori ?: 'Berita' }}</span>
                </div>
                <div class="news-content-box">
                    <div class="news-meta-row">
                        <span><i class="far fa-calendar-alt" style="color:var(--primary); margin-right:4px;"></i> {{ $item->tanggal_publikasi ? $item->tanggal_publikasi->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                        <span><i class="far fa-eye" style="color:var(--primary); margin-right:4px;"></i> {{ $item->views }} views</span>
                    </div>
                    <h3><a href="{{ route('berita.show', $item->slug) }}">{{ $item->judul }}</a></h3>
                    <p style="font-size:0.88rem; color:var(--text-muted); line-height:1.6; margin-top:auto;">
                        {{ Str::limit(strip_tags($item->konten), 90) }}
                    </p>
                    <a href="{{ route('berita.show', $item->slug) }}" style="color:var(--primary); font-weight:700; font-size:0.85rem; text-decoration:none; margin-top:12px; display:inline-flex; align-items:center; gap:6px;">
                        Baca Artikel <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            @empty
            <p style="grid-column: 1/-1; text-align:center; color:var(--text-muted);">Belum ada berita terbit.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- ===== CTA PSB BANNER MEWAH ===== -->
<section style="padding: 0 0 60px 0; background: #ffffff;">
    <div class="container">
        <div class="cta-banner">
            <h2>Penerimaan Santri Baru (PSB) Dibuka</h2>
            <p>
                Daftarkan putra-putri tercinta sekarang juga. Kuota penerimaan santri terbatas untuk menjaga rasio kualitas belajar terbaik.
            </p>
            <div style="display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
                <a href="{{ route('psb.index') }}" class="btn btn-white" style="font-size:0.95rem; padding:14px 32px; font-weight:700;">
                    <i class="fas fa-circle-info"></i> PSB
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-outline" style="border-color:#ffffff; color:#ffffff; font-size:0.95rem; padding:14px 28px;">
                    <i class="fab fa-whatsapp"></i> Chat Panitia PSB
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== LOKASI PESANTREN (GOOGLE MAPS) MEWAH & RAPI ===== -->
<section class="section-py" style="background: #f8fafc; border-top: 1px solid var(--border-light); padding: 70px 0 90px;">
    <div class="container">
        <div class="section-header">
            <span class="section-badge"><i class="fas fa-map-location-dot"></i> Lokasi & Akses Kampus</span>
            <h2 class="section-title">Lokasi Pesantren <span>Thayyiba IIBS</span></h2>
            <p class="section-desc">
                Akses mudah dan nyaman menuju kampus Pesantren Thayyiba. Kami dengan senang hati menyambut kunjungan silaturahmi Bapak/Ibu dan calon santri.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; align-items: stretch;">
            <!-- Kolom Informasi Lokasi & Kunjungan -->
            <div style="background: #ffffff; border-radius: var(--radius-lg); padding: 36px 32px; border: 1px solid var(--border-light); box-shadow: var(--shadow-card); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <!-- Header Card -->
                    <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 22px; padding-bottom: 20px; border-bottom: 1px solid var(--border-light);">
                        <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(153, 27, 27, 0.09); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 24px; flex-shrink: 0;">
                            <i class="fas fa-mosque"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 19px; font-weight: 800; color: var(--dark); margin: 0;">Pesantren Aufia 2 Thayyiba IIBS</h3>
                        </div>
                    </div>

                    <!-- Detail Alamat -->
                    <div style="display: flex; gap: 14px; margin-bottom: 20px; align-items: flex-start;">
                        <div style="width: 36px; height: 36px; border-radius: 10px; background: #fee2e2; color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0; margin-top: 2px;">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div>
                            <strong style="display: block; font-size: 14px; color: var(--dark); margin-bottom: 4px;">Alamat Kampus:</strong>
                            <p style="font-size: 14px; color: var(--text-muted); line-height: 1.6; margin: 0;">
                                Jorong Tobo Ladang, Nagari Pakan Sinayan, Kec. Banuhampu, Kab. Agam, Sumatera Barat
                            </p>
                        </div>
                    </div>

                    <!-- Jam Kunjungan & Layanan -->
                    <div style="display: flex; gap: 14px; margin-bottom: 20px; align-items: flex-start;">
                        <div style="width: 36px; height: 36px; border-radius: 10px; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0; margin-top: 2px;">
                            <i class="far fa-clock"></i>
                        </div>
                        <div>
                            <strong style="display: block; font-size: 14px; color: var(--dark); margin-bottom: 4px;">Jam Layanan Tamu & Kunjungan:</strong>
                            <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.6; margin: 0;">
                                <strong>Senin - Sabtu:</strong> 08.00 - 16.30 WIB<br>
                                <strong>Ahad / Libur:</strong> Khusus Janji Temu / Survei PSB
                            </p>
                        </div>
                    </div>

                    <!-- Akses Kendaraan & Parkir -->
                    <div style="display: flex; gap: 14px; margin-bottom: 24px; align-items: flex-start;">
                        <div style="width: 36px; height: 36px; border-radius: 10px; background: #dcfce7; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 16px; flex-shrink: 0; margin-top: 2px;">
                            <i class="fas fa-square-parking"></i>
                        </div>
                        <div>
                            <strong style="display: block; font-size: 14px; color: var(--dark); margin-bottom: 4px;">Fasilitas Parkir & Keamanan:</strong>
                            <p style="font-size: 13.5px; color: var(--text-muted); line-height: 1.6; margin: 0;">
                                Area parkir roda 2 & 4 luas, keamanan pos santri 24 jam, akses jalan aspal leluasa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi Interaktif -->
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">
                    <a href="https://maps.google.com/?q=Pesantren+Aufia+2+Thayyiba+Banuhampu+Agam" target="_blank" class="btn btn-primary" style="width: 100%; justify-content: center; padding: 13px 20px; font-size: 0.92rem;">
                        <i class="fas fa-diamond-turn-right"></i> Petunjuk Arah di Google Maps
                    </a>
                </div>
            </div>

            <!-- Kolom Tampilan Google Maps Interaktif -->
            <div style="position: relative; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-card); min-height: 440px; background: #e2e8f0;">
                <!-- Floating Info Badge on Map -->
                <div style="position: absolute; top: 16px; left: 16px; z-index: 10; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); padding: 8px 16px; border-radius: var(--radius-full); box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12); display: flex; align-items: center; gap: 8px; border: 1px solid rgba(220, 38, 38, 0.2);">
                    <span style="width: 9px; height: 9px; border-radius: 50%; background: #22c55e; display: inline-block; box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.25);"></span>
                    <span style="font-size: 12px; font-weight: 700; color: var(--dark);">Aufia 2 Thayyiba IIBS</span>
                </div>

                <!-- Floating Fullscreen Button -->
                <a href="https://maps.google.com/?q=Pesantren+Aufia+2+Thayyiba+Banuhampu+Agam" target="_blank" style="position: absolute; top: 16px; right: 16px; z-index: 10; background: #ffffff; color: var(--primary); padding: 8px 14px; border-radius: var(--radius-full); box-shadow: 0 4px 14px rgba(0, 0, 0, 0.12); font-size: 12px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; border: 1px solid var(--border-light);">
                    <i class="fas fa-up-right-from-square"></i> Buka Layar Penuh
                </a>

                <!-- Google Maps Embed Iframe -->
                <iframe
                    title="Peta Lokasi Pesantren Aufia 2 Thayyiba IIBS"
                    src="https://maps.google.com/maps?q=Pesantren+Aufia+2+Thayyiba+Agam&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="100%"
                    style="border: 0; min-height: 440px; display: block; filter: saturate(1.1);"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    const heroSwiper = new Swiper('.swiper-hero', {
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        }
    });
</script>
@endsection
