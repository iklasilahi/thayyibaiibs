@extends('layouts.admin')
@section('header_title', 'Kelola Fasilitas')
@section('content')
<div class="page-header">
    <div>
        <h2 class="page-title">Fasilitas Pesantren</h2>
        <p style="color:var(--text-muted); font-size:14px; margin-top:4px;">Kelola daftar fasilitas kampus dan sarana prasarana pesantren.</p>
    </div>
    <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah Fasilitas
    </a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th width="70" style="text-align:center;">Urutan</th>
                    <th width="100">Ikon / Foto</th>
                    <th>Nama Fasilitas</th>
                    <th>Deskripsi</th>
                    <th width="140" style="text-align:center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($fasilitas as $f)
                <tr>
                    <td style="text-align:center;">
                        <span class="badge" style="background:#e2e8f0; color:#334155; font-size:13px; font-weight:700;">
                            {{ $f->urutan ?? 0 }}
                        </span>
                    </td>
                    <td>
                        <div style="display:flex; align-items:center; gap:8px;">
                            <div style="width:42px; height:42px; border-radius:8px; background:rgba(183, 28, 28, 0.08); color:var(--primary); display:flex; align-items:center; justify-content:center; font-size:18px;">
                                <i class="fas {{ $f->ikon ?: 'fa-building' }}"></i>
                            </div>
                            @if($f->gambar)
                                <img src="{{ asset('storage/' . $f->gambar) }}" alt="{{ $f->nama }}" style="width:42px; height:42px; object-fit:cover; border-radius:8px; border:1px solid var(--border);">
                            @endif
                        </div>
                    </td>
                    <td>
                        <div style="font-weight:600; color:var(--text-main); font-size:15px;">{{ $f->nama }}</div>
                        <small style="color:var(--text-muted); font-family:monospace;">
                            <i class="fas fa-code"></i> {{ $f->ikon ?: 'fa-building' }}
                        </small>
                    </td>
                    <td>
                        <p style="margin:0; color:var(--text-muted); font-size:13px; line-height:1.5;">
                            {{ Str::limit($f->deskripsi, 120) }}
                        </p>
                    </td>
                    <td>
                        <div class="action-btns" style="justify-content:center;">
                            <a href="{{ route('admin.fasilitas.edit', $f->id) }}" class="btn btn-sm btn-primary" style="background:#0ea5e9;" title="Edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('admin.fasilitas.destroy', $f->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" style="text-align:center; padding:40px 20px; color:var(--text-muted);">
                        <i class="fas fa-building" style="font-size:36px; margin-bottom:12px; display:block; opacity:0.4;"></i>
                        <p style="margin:0; font-weight:500;">Belum ada fasilitas yang ditambahkan.</p>
                        <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-sm btn-primary" style="margin-top:12px;">
                            <i class="fas fa-plus"></i> Tambah Sekarang
                        </a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($fasilitas->hasPages())
    <div style="margin-top: 20px;">
        {{ $fasilitas->links('pagination::bootstrap-4') }}
    </div>
    @endif
</div>
@endsection
