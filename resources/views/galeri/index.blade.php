@extends('layouts.app')
@section('title', 'Galeri & Album Foto - Pesantren Thayyiba')
@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <span style="display:inline-flex; align-items:center; gap:8px; background:rgba(251, 191, 36, 0.18); color:#fef08a; font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px; padding:6px 16px; border-radius:var(--radius-full); margin-bottom:14px; border:1px solid rgba(251, 191, 36, 0.3);">
            <i class="fas fa-camera-retro"></i> Dokumentasi & Album Kegiatan
        </span>
        <h2>Galeri Foto & Album</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> Beranda</a>
            <span>/</span>
            <span>Galeri & Album</span>
        </div>
    </div>
</div>

<section class="section" style="background:#f8fafc; padding: 60px 0 90px;">
    <div class="container">

        <!-- Intro -->
        <div style="text-align:center; max-width:680px; margin:0 auto 36px;">
            <h3 style="font-size:1.45rem; font-weight:800; color:var(--dark); margin-bottom:8px;">
                Dokumentasi Kegiatan & Fasilitas Kampus
            </h3>
            <p style="color:var(--text-muted); font-size:0.95rem; margin:0;">
                Koleksi momen keseharian santri, agenda pesantren, serta sarana prasarana modern Pesantren Thayyiba IIBS.
            </p>
        </div>

        <!-- Filter Tabs -->
        @if($kategori->count() > 1)
        <div class="filter-tabs animate-on-scroll">
            <button type="button" class="filter-tab active" onclick="filterGaleri('all', this)">
                <i class="fas fa-layer-group"></i> Semua Album
            </button>
            @foreach($kategori as $k)
            <button type="button" class="filter-tab" onclick="filterGaleri('{{ $k }}', this)">
                {{ ucfirst($k) }}
            </button>
            @endforeach
        </div>
        @endif

        @if($galeri->count() > 0)
        <!-- Gallery Grid -->
        <div class="gallery-grid" id="galleryContainer">
            @foreach($galeri as $g)
            <div class="gallery-item animate-on-scroll" data-kategori="{{ $g->kategori }}" onclick="openLightbox('{{ asset('storage/' . $g->gambar) }}', '{{ addslashes($g->judul) }}', '{{ addslashes($g->deskripsi ?? ucfirst($g->kategori)) }}')">
                <img src="{{ asset('storage/' . $g->gambar) }}" alt="{{ $g->judul }}" loading="lazy">
                
                <!-- Category Tag Top Left -->
                <span style="position:absolute; top:12px; left:12px; background:rgba(15, 23, 42, 0.7); backdrop-filter:blur(6px); color:#ffffff; font-size:10.5px; font-weight:700; text-transform:uppercase; padding:3px 10px; border-radius:var(--radius-full); z-index:3; letter-spacing:0.5px;">
                    {{ ucfirst($g->kategori) }}
                </span>

                <!-- Zoom Icon Center on Hover -->
                <div class="zoom-icon-badge" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%) scale(0.7); width:46px; height:46px; border-radius:50%; background:rgba(255,255,255,0.92); color:var(--primary); display:flex; align-items:center; justify-content:center; font-size:18px; opacity:0; transition:all 0.3s ease; z-index:4; box-shadow:0 6px 18px rgba(0,0,0,0.2);">
                    <i class="fas fa-search-plus"></i>
                </div>

                <!-- Overlay Bottom -->
                <div class="gallery-overlay">
                    <h4>{{ $g->judul }}</h4>
                    <p>{{ $g->deskripsi ?? ucfirst($g->kategori) }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pagination-wrap">
            {{ $galeri->links('pagination::bootstrap-4') }}
        </div>
        @else
        <div class="no-data">
            <i class="fas fa-images"></i>
            <h4 style="font-size:1.25rem; font-weight:700; color:var(--dark); margin-bottom:8px;">Galeri Belum Tersedia</h4>
            <p>Album foto kegiatan dan sarana pesantren akan segera diunggah oleh tim dokumentasi.</p>
            <a href="{{ route('home') }}" class="btn btn-outline" style="margin-top:16px;">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
        @endif

    </div>
</section>

<!-- Lightbox Modal -->
<div id="galleryModal" style="display:none; position:fixed; inset:0; background:rgba(15, 23, 42, 0.95); backdrop-filter:blur(10px); z-index:99999; align-items:center; justify-content:center; padding:20px;" onclick="closeLightbox(event)">
    <div style="position:relative; max-width:920px; width:100%; max-height:90vh; display:flex; flex-direction:column; align-items:center;">
        
        <!-- Close Button -->
        <button type="button" onclick="closeLightbox(null)" style="position:absolute; top:-45px; right:0; background:rgba(255,255,255,0.2); border:none; color:#ffffff; width:36px; height:36px; border-radius:50%; cursor:pointer; font-size:18px; display:flex; align-items:center; justify-content:center; transition:background 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.4)'" onmouseout="this.style.background='rgba(255,255,255,0.2)'">
            <i class="fas fa-times"></i>
        </button>

        <!-- Preview Image with Controlled Height -->
        <div style="width:100%; border-radius:var(--radius-lg); overflow:hidden; background:#000; box-shadow:0 25px 50px -12px rgba(0,0,0,0.6);">
            <img id="lightboxImg" src="" alt="" style="width:100%; max-height:75vh; object-fit:contain; display:block; margin:0 auto;">
        </div>

        <!-- Caption Box -->
        <div style="background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.15); border-radius:var(--radius-full); padding:10px 24px; margin-top:16px; text-align:center; color:#ffffff; backdrop-filter:blur(8px);">
            <h4 id="lightboxTitle" style="margin:0; font-size:1rem; font-weight:700;"></h4>
            <p id="lightboxDesc" style="margin:2px 0 0; font-size:0.85rem; color:rgba(255,255,255,0.8);"></p>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    window.filterGaleri = function(kat, btn) {
        document.querySelectorAll('.filter-tab').forEach(function(t) {
            t.classList.remove('active');
        });

        var targetBtn = btn || (typeof event !== 'undefined' && event && event.target ? event.target.closest('.filter-tab') : null);
        if (targetBtn) {
            targetBtn.classList.add('active');
        }

        var items = document.querySelectorAll('.gallery-item');
        var targetKat = String(kat || 'all').trim().toLowerCase();
        var matchCount = 0;

        items.forEach(function(item) {
            var itemKat = String(item.dataset.kategori || '').trim().toLowerCase();
            if (targetKat === 'all' || itemKat === targetKat) {
                item.style.display = '';
                item.style.opacity = '1';
                matchCount++;
            } else {
                item.style.display = 'none';
            }
        });

        var emptyMsg = document.getElementById('galleryEmptyFilter');
        var container = document.getElementById('galleryContainer');
        if (matchCount === 0 && container) {
            if (!emptyMsg) {
                emptyMsg = document.createElement('div');
                emptyMsg.id = 'galleryEmptyFilter';
                emptyMsg.className = 'no-data';
                emptyMsg.style.gridColumn = '1 / -1';
                emptyMsg.style.padding = '40px 20px';
                emptyMsg.style.textAlign = 'center';
                emptyMsg.innerHTML = '<i class="fas fa-images"></i><p style="margin-top:10px; color:var(--text-muted); font-size:15px;">Belum ada foto dalam album/kategori ini.</p>';
                container.appendChild(emptyMsg);
            } else {
                emptyMsg.style.display = 'block';
            }
        } else if (emptyMsg) {
            emptyMsg.style.display = 'none';
        }
    };

    window.openLightbox = function(src, title, desc) {
        var modal = document.getElementById('galleryModal');
        var img = document.getElementById('lightboxImg');
        var titleEl = document.getElementById('lightboxTitle');
        var descEl = document.getElementById('lightboxDesc');

        if (img) img.src = src;
        if (titleEl) titleEl.textContent = title;
        if (descEl) descEl.textContent = desc;
        if (modal) {
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeLightbox = function(e) {
        if (!e || e.target.id === 'galleryModal' || e.target.closest('button')) {
            var modal = document.getElementById('galleryModal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    };

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') window.closeLightbox(null);
    });
</script>
<style>
    .gallery-item {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .gallery-item:hover .zoom-icon-badge {
        opacity: 1 !important;
        transform: translate(-50%, -50%) scale(1) !important;
    }
</style>
@endsection
