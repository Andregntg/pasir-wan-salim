<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarRtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\StrukturDesaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RtController;

Route::get('/beranda', function () {
    return view('beranda');
});


Route::get('/', [BerandaController::class, 'index']);

Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/tentang/daftarRt', [DaftarRtController::class, 'daftarRt'])->name('tentang.daftarRt');
Route::get('/tentang/struktur', [StrukturDesaController::class, 'struktur'])->name('tentang.struktur');
Route::get('/tentang/visiMisi', [VisiMisiController::class, 'visiMisi'])->name('tentang.visiMisi');
Route::get('/Berita/informasi', [InformasiController::class,'informasi'])->name('Berita.informasi');
Route::get('/Kontak/kontak', [KontakController::class, 'index'])->name('Kontak.kontak');
Route::resource('informasi', InformasiController::class)->middleware(['auth','admin']);
Route::resource('jabatan', JabatanController::class)->middleware(['auth','admin']);
Route::resource('pegawai', PegawaiController::class)->middleware(['auth','admin']);
Route::resource('rt', RtController::class)->middleware(['auth','admin']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth','admin'])->name('dashboardAdmin');
