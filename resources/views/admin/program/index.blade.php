@extends('layouts.admin')
@section('header_title', 'Kelola Program')
@section('content')
<div class="page-header">
    <h2 class="page-title">Program Pesantren</h2>
    <a href="{{ route('admin.program.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Program</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Program</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($program as $p)
                <tr>
                    <td>
                        @if($p->gambar)
                        <img src="{{ asset('storage/' . $p->gambar) }}" style="width:60px; height:60px; object-fit:cover; border-radius:4px;">
                        @else
                        <div style="width:60px; height:60px; background:#e2e8f0; border-radius:4px; display:flex; align-items:center; justify-content:center;"><i class="fas fa-graduation-cap text-muted"></i></div>
                        @endif
                    </td>
                    <td><div style="font-weight: 500;">{{ $p->nama }}</div><small style="color:var(--text-muted)">{{ $p->jadwal }}</small></td>
                    <td>{{ ucfirst($p->kategori) }}</td>
                    <td>
                        @if($p->is_active) <span class="badge badge-success">Aktif</span> @else <span class="badge badge-danger">Nonaktif</span> @endif
                    </td>
                    <td>
                        <div class="action-btns">
                            <a href="{{ route('admin.program.edit', $p->id) }}" class="btn btn-sm btn-primary" style="background:#0ea5e9"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('admin.program.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" style="text-align:center">Belum ada program.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
