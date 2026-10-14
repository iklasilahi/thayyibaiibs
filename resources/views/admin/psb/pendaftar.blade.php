@extends('layouts.admin')
@section('header_title', 'Pendaftar PSB')
@section('content')
<div class="page-header">
    <h2 class="page-title">Pendaftar Tahun {{ $psb->tahun_ajaran }}</h2>
    <a href="{{ route('admin.psb.index') }}" class="btn btn-primary" style="background:var(--text-muted)"><i class="fas fa-arrow-left"></i> Kembali ke PSB</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Nama Santri</th>
                    <th>Asal Sekolah</th>
                    <th>Nama Orang Tua</th>
                    <th>Kontak</th>
                    <th>Status</th>
                    <th>Aksi Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pendaftar as $p)
                <tr>
                    <td>
                        <div style="font-weight:600">{{ $p->nama_lengkap }}</div>
                        <small style="color:var(--text-muted)">NISN: {{ $p->nisn ?? '-' }}</small>
                    </td>
                    <td>{{ $p->asal_sekolah }}</td>
                    <td>{{ $p->nama_ayah }}</td>
                    <td>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $p->no_hp) }}" target="_blank" style="color:#10b981"><i class="fab fa-whatsapp"></i> {{ $p->no_hp }}</a>
                    </td>
                    <td>
                        @if($p->status == 'diterima') <span class="badge badge-success">Diterima</span>
                        @elseif($p->status == 'ditolak') <span class="badge badge-danger">Ditolak</span>
                        @else <span class="badge badge-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('admin.pendaftar.status', $p->id) }}" method="POST" style="display:flex; gap:5px;">
                            @csrf @method('PATCH')
                            <select name="status" onchange="this.form.submit()" style="padding:4px; border-radius:4px; border:1px solid #ccc;">
                                <option value="pending" {{ $p->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="diterima" {{ $p->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="ditolak" {{ $p->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" style="text-align:center">Belum ada pendaftar pada PSB ini.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div style="margin-top: 20px;">
        {{ $pendaftar->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
