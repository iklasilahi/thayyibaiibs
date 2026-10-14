@extends('layouts.admin')
@section('header_title', 'Kelola Berita')
@section('content')
<div class="page-header">
    <h2 class="page-title">Berita & Informasi</h2>
    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Berita</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th width="80">Gambar</th>
                    <th>Judul Berita</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($berita as $b)
                <tr>
                    <td>
                        @if($b->gambar)
                        <img src="{{ asset('storage/' . $b->gambar) }}" style="width:60px; height:40px; object-fit:cover; border-radius:4px;">
                        @else
                        <div style="width:60px; height:40px; background:#e2e8f0; border-radius:4px; display:flex; align-items:center; justify-content:center;"><i class="fas fa-image text-muted"></i></div>
                        @endif
                    </td>
                    <td><div style="font-weight: 500;">{{ $b->judul }}</div><small style="color:var(--text-muted)">{{ $b->slug }}</small></td>
                    <td>{{ ucfirst($b->kategori) }}</td>
                    <td>
                        @if($b->is_published) <span class="badge badge-success">Publik</badge> @else <span class="badge badge-warning">Draft</badge> @endif
                    </td>
                    <td>{{ $b->created_at->format('d M Y') }}</td>
                    <td>
                        <div class="action-btns">
                            <a href="{{ route('admin.berita.edit', $b->id) }}" class="btn btn-sm btn-primary" style="background:#0ea5e9"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('admin.berita.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" style="text-align:center">Belum ada data berita.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div style="margin-top: 20px;">
        {{ $berita->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
