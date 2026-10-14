@extends('layouts.admin')
@section('header_title', 'Dashboard Overview')

@section('content')

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; margin-bottom: 30px;">
    <!-- Stat Cards -->
    <div class="card" style="margin: 0; display: flex; align-items: center; gap: 20px;">
        <div style="width: 60px; height: 60px; background: #fee2e2; color: #B71C1C; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
            <i class="fas fa-newspaper"></i>
        </div>
        <div>
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 5px;">Total Berita</div>
            <div style="font-size: 28px; font-weight: 700;">{{ $stats['berita'] }}</div>
        </div>
    </div>

    <div class="card" style="margin: 0; display: flex; align-items: center; gap: 20px;">
        <div style="width: 60px; height: 60px; background: #e0f2fe; color: #0284c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
            <i class="fas fa-images"></i>
        </div>
        <div>
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 5px;">Foto Galeri</div>
            <div style="font-size: 28px; font-weight: 700;">{{ $stats['galeri'] }}</div>
        </div>
    </div>

    <div class="card" style="margin: 0; display: flex; align-items: center; gap: 20px;">
        <div style="width: 60px; height: 60px; background: #fef3c7; color: #d97706; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div>
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 5px;">Program</div>
            <div style="font-size: 28px; font-weight: 700;">{{ $stats['program'] }}</div>
        </div>
    </div>

    <div class="card" style="margin: 0; display: flex; align-items: center; gap: 20px;">
        <div style="width: 60px; height: 60px; background: #dcfce7; color: #16a34a; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
            <i class="fas fa-users"></i>
        </div>
        <div>
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 5px;">Pendaftar PSB</div>
            <div style="font-size: 28px; font-weight: 700;">{{ $stats['pendaftar'] }}</div>
        </div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px;">
    <div class="card">
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <h3 style="font-size: 18px;">Pendaftar PSB Terbaru</h3>
            <a href="{{ route('admin.psb.index') }}" style="color: var(--primary); font-size: 14px;">Lihat Semua</a>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Tanggal Daftar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pendaftarTerbaru as $p)
                    <tr>
                        <td style="font-weight: 500;">{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->asal_sekolah }}</td>
                        <td>{{ $p->created_at->format('d M Y') }}</td>
                        <td>
                            @if($p->status == 'diterima') <span class="badge badge-success">Diterima</span>
                            @elseif($p->status == 'ditolak') <span class="badge badge-danger">Ditolak</span>
                            @else <span class="badge badge-warning">Pending</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" style="text-align: center; color: var(--text-muted);">Belum ada pendaftar</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <h3 style="font-size: 18px; margin-bottom: 20px;">Berita Terbaru</h3>
        <div style="display: flex; flex-direction: column; gap: 16px;">
            @forelse($beritaTerbaru as $b)
            <div style="display: flex; gap: 12px; padding-bottom: 16px; border-bottom: 1px solid var(--border);">
                @if($b->gambar)
                <img src="{{ asset('storage/' . $b->gambar) }}" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                @else
                <div style="width: 60px; height: 60px; background: #f1f5f9; border-radius: 8px; display: flex; align-items: center; justify-content: center;"><i class="fas fa-image" style="color:#cbd5e1;"></i></div>
                @endif
                <div>
                    <a href="#" style="font-weight: 600; font-size: 14px; color: var(--text-main); display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $b->judul }}</a>
                    <div style="font-size: 12px; color: var(--text-muted); margin-top: 4px;">{{ $b->created_at->format('d M Y') }}</div>
                </div>
            </div>
            @empty
            <p style="text-align: center; color: var(--text-muted);">Belum ada berita</p>
            @endforelse
        </div>
    </div>
</div>

@endsection
