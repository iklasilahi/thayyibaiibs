@extends('layouts.app')
@section('title', 'Fasilitas - Pesantren Thayyiba')
@section('content')
<div class="page-header">
    <div class="container">
        <h2>Fasilitas</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> <span>/</span> <span>Profil</span> <span>/</span> <span>Fasilitas</span>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        @if($fasilitas->count() > 0)
        <div class="facility-grid">
            @foreach($fasilitas as $f)
            <div class="facility-card animate-on-scroll">
                <div class="icon">
                    <i class="fas {{ $f->ikon ?? 'fa-building' }}"></i>
                </div>
                <h4>{{ $f->nama }}</h4>
                <p>{{ $f->deskripsi }}</p>
            </div>
            @endforeach
        </div>
        @else
        <div class="no-data">
            <i class="fas fa-building"></i>
            <p>Data fasilitas akan segera ditampilkan.</p>
        </div>
        @endif
    </div>
</section>
@endsection
