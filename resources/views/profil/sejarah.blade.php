@extends('layouts.app')
@section('title', 'Sejarah - Pesantren Thayyiba')
@section('content')
<div class="page-header">
    <div class="container">
        <h2>Sejarah Pesantren</h2>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> <span>/</span> <span>Profil</span> <span>/</span> <span>Sejarah</span>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="profil-content animate-on-scroll">
            <h3>Sejarah Berdirinya Pesantren Thayyiba</h3>
            <p>Pesantren Thayyiba didirikan dengan semangat untuk mencetak generasi Muslim yang unggul dalam ilmu agama maupun ilmu pengetahuan umum. Berawal dari sebuah pengajian kecil yang diselenggarakan secara rutin, lambat laun berkembang menjadi lembaga pendidikan Islam yang diakui dan dipercaya masyarakat.</p>
            <p>Seiring berjalannya waktu, Pesantren Thayyiba terus berkembang dan membangun berbagai fasilitas pendidikan untuk menunjang proses belajar mengajar. Dengan motto "Mendidik Generasi Qur'ani", pesantren ini berkomitmen untuk melahirkan santri-santri yang hafal Al-Qur'an, berakhlak mulia, dan berwawasan luas.</p>

            <h3>Perjalanan & Perkembangan</h3>
            <p>Dari tahun ke tahun, Pesantren Thayyiba terus menunjukkan kemajuan yang signifikan. Berbagai prestasi telah diraih oleh para santri di berbagai kompetisi baik tingkat regional maupun nasional. Kurikulum yang dikembangkan mengintegrasikan antara pendidikan agama Islam yang mendalam dengan pendidikan umum yang berkualitas.</p>
            <p>Pesantren Thayyiba juga aktif menjalin kerjasama dengan berbagai lembaga pendidikan dan organisasi keislaman untuk terus meningkatkan kualitas pendidikan yang diberikan kepada para santri.</p>

            <h3>Nilai-Nilai Dasar</h3>
            <ul>
                <li>Berpegang teguh pada Al-Qur'an dan As-Sunnah</li>
                <li>Mengutamakan akhlakul karimah dalam setiap aspek kehidupan</li>
                <li>Menghargai ilmu pengetahuan dan mendorong semangat belajar</li>
                <li>Menjunjung tinggi persatuan dan ukhuwah Islamiyah</li>
                <li>Mengembangkan kemandirian dan kepemimpinan santri</li>
            </ul>
        </div>
    </div>
</section>
@endsection
