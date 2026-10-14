<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PsbController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\PsbController as AdminPsbController;
use App\Http\Controllers\Admin\FasilitasController as AdminFasilitasController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Profil
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/fasilitas', [ProfilController::class, 'fasilitas'])->name('fasilitas');
    Route::get('/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('struktur');
    Route::get('/pengurus', [ProfilController::class, 'pengurus'])->name('pengurus');
});

// Program
Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
Route::get('/program/{slug}', [ProgramController::class, 'show'])->name('program.show');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// PSB
Route::prefix('psb')->name('psb.')->group(function () {
    Route::get('/', [PsbController::class, 'index'])->name('index');
    Route::get('/syarat-pendaftaran', [PsbController::class, 'syarat'])->name('syarat');
    Route::get('/jadwal-pendaftaran', [PsbController::class, 'jadwal'])->name('jadwal');
    Route::get('/materi-ujian', [PsbController::class, 'materi'])->name('materi');
    Route::get('/kontak-informasi', [PsbController::class, 'kontak'])->name('kontak');
    Route::post('/daftar', [PsbController::class, 'daftar'])->middleware('throttle:10,1')->name('daftar');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (Stealth & Protected Prefix)
|--------------------------------------------------------------------------
*/

$adminPrefix = env('ADMIN_PREFIX', 'panel-thayyiba');

Route::prefix($adminPrefix)->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('berita', AdminBeritaController::class)->except(['show']);
        Route::resource('galeri', AdminGaleriController::class)->except(['show']);
        Route::resource('program', AdminProgramController::class)->except(['show']);
        Route::resource('psb', AdminPsbController::class)->except(['show']);
        Route::get('psb/{psb}/pendaftar', [AdminPsbController::class, 'pendaftar'])->name('psb.pendaftar');
        Route::patch('pendaftar/{pendaftar}/status', [AdminPsbController::class, 'updateStatus'])->name('pendaftar.status');
        Route::resource('fasilitas', AdminFasilitasController::class)->parameters(['fasilitas' => 'fasilitas'])->except(['show']);
    });
});

// Blokir tebakan bot ke /admin jika prefix sudah disamarkan
if ($adminPrefix !== 'admin') {
    Route::any('/admin/{any?}', function () {
        abort(404);
    })->where('any', '.*');
}
