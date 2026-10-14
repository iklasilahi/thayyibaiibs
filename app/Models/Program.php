<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'gambar',
        'kategori',
        'jadwal',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
