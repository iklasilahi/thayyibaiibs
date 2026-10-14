<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psb extends Model
{
    protected $table = 'psb';

    protected $fillable = [
        'tahun_ajaran',
        'tanggal_buka',
        'tanggal_tutup',
        'persyaratan',
        'prosedur',
        'biaya',
        'brosur',
        'status',
    ];

    protected $casts = [
        'tanggal_buka' => 'date',
        'tanggal_tutup' => 'date',
    ];

    public function pendaftar()
    {
        return $this->hasMany(Pendaftar::class);
    }
}
