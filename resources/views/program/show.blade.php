@extends('layouts.app')
@section('title', $program->nama . ' - Pesantren Thayyiba')
@section('content')
<div class="page-header">
    <div class="container">
        <h2>{{ $program->nama }}</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> <span>/</span> <a href="{{ route('program.index') }}">Program</a> <span>/</span> <span>{{ $program->nama }}</span>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="berita-detail animate-on-scroll">
            @if($program->gambar)
            <div class="berita-img">
                <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->nama }}">
            </div>
            @endif
            <div class="meta">
                <span><i class="fas fa-tag"></i> {{ ucfirst($program->kategori) }}</span>
                @if($program->jadwal)
                <span><i class="fas fa-clock"></i> {{ $program->jadwal }}</span>
                @endif
            </div>
            <h1>{{ $program->nama }}</h1>
            <div class="content">
                {!! nl2br(e($program->deskripsi)) !!}
            </div>
            <div style="margin-top:40px;">
                <a href="{{ route('program.index') }}" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Kembali ke Program</a>
            </div>
        </div>
    </div>
</section>
@endsection
