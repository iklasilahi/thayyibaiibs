@extends('layouts.app')
@section('title', 'Struktur Organisasi - Pesantren Thayyiba')
@section('content')
<div class="page-header">
    <div class="container">
        <h2>Struktur Organisasi</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> <span>/</span> <span>Profil</span> <span>/</span> <span>Struktur Organisasi</span>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="profil-content animate-on-scroll" style="text-align:center;">
            <p>Informasi struktur organisasi Pesantren Thayyiba akan segera ditampilkan.</p>
            <div style="margin-top:30px;padding:60px;background:var(--gray-50);border-radius:var(--radius-lg);border:2px dashed var(--gray-200);">
                <i class="fas fa-sitemap" style="font-size:60px;color:var(--gray-300);margin-bottom:16px;"></i>
                <p style="color:var(--gray-400);">Struktur organisasi dapat diupdate melalui admin panel.</p>
            </div>
        </div>
    </div>
</section>
@endsection
