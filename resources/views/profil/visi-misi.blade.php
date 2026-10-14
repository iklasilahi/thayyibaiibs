@extends('layouts.app')
@section('title', 'Visi & Misi - Pesantren Thayyiba')
@section('content')
<div class="page-header">
    <div class="container">
        <h2>Visi & Misi</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> <span>/</span> <span>Profil</span> <span>/</span> <span>Visi & Misi</span>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="profil-content">
            <div class="visi-misi-card animate-on-scroll">
                <h3 style="margin-top:0">Visi</h3>
                <p>"Menjadi lembaga pendidikan Islam terdepan yang mencetak generasi Qur'ani, berilmu, berakhlak mulia, berwawasan global, dan siap menjadi pemimpin umat."</p>
            </div>

            <div class="visi-misi-card animate-on-scroll">
                <h3 style="margin-top:0">Misi</h3>
                <ul>
                    <li>Menyelenggarakan pendidikan Islam yang berkualitas dan berkesinambungan berdasarkan Al-Qur'an dan As-Sunnah.</li>
                    <li>Membina santri agar hafal Al-Qur'an dengan pemahaman tajwid dan tafsir yang baik.</li>
                    <li>Mengembangkan kemampuan berbahasa Arab dan Inggris secara aktif.</li>
                    <li>Membekali santri dengan ilmu pengetahuan umum dan keterampilan hidup (life skills).</li>
                    <li>Membentuk karakter santri yang mandiri, disiplin, bertanggung jawab, dan berjiwa kepemimpinan.</li>
                    <li>Menciptakan lingkungan pesantren yang kondusif, aman, dan nyaman untuk belajar.</li>
                    <li>Menjalin kerjasama yang harmonis antara pesantren, orang tua, dan masyarakat.</li>
                </ul>
            </div>

            <div class="visi-misi-card animate-on-scroll">
                <h3 style="margin-top:0">Tujuan</h3>
                <ul>
                    <li>Menghasilkan lulusan yang hafal minimal 5 juz Al-Qur'an dengan sanad yang jelas.</li>
                    <li>Mempersiapkan santri yang mampu melanjutkan pendidikan ke jenjang yang lebih tinggi.</li>
                    <li>Mencetak generasi Muslim yang aktif berkontribusi positif bagi masyarakat dan bangsa.</li>
                    <li>Mengembangkan potensi dan bakat santri di bidang akademik, seni, olahraga, dan dakwah.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
