@extends('layouts.admin')
@section('header_title', 'Kelola PSB')
@section('content')
<div class="page-header">
    <h2 class="page-title">Penerimaan Santri Baru (PSB)</h2>
    <a href="{{ route('admin.psb.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Buka PSB Baru</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Tahun Ajaran</th>
                    <th>Periode</th>
                    <th>Status</th>
                    <th>Pendaftar</th>
                    <th width="200">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($psb as $p)
                <tr>
                    <td style="font-weight: 600;">{{ $p->tahun_ajaran }}</td>
                    <td>{{ \Carbon\Carbon::parse($p->tanggal_buka)->format('d M') }} - {{ \Carbon\Carbon::parse($p->tanggal_tutup)->format('d M Y') }}</td>
                    <td>
                        @if($p->status == 'buka') <span class="badge badge-success">Buka</span>
                        @elseif($p->status == 'segera') <span class="badge badge-warning">Segera</span>
                        @else <span class="badge badge-danger">Tutup</span>
                        @endif
                    </td>
                    <td><span class="badge" style="background:var(--primary); color:white;">{{ $p->pendaftar()->count() }} Santri</span></td>
                    <td>
                        <div class="action-btns">
                            <a href="{{ route('admin.psb.pendaftar', $p->id) }}" class="btn btn-sm btn-primary" style="background:#10b981"><i class="fas fa-users"></i> Pendaftar</a>
                            <a href="{{ route('admin.psb.edit', $p->id) }}" class="btn btn-sm btn-primary" style="background:#0ea5e9"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.psb.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Semua data pendaftar pada PSB ini juga akan terhapus. Yakin?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" style="text-align:center">Belum ada data PSB.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
