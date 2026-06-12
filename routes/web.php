<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;






Route::resource('kategori', KategoriController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard'); 

Route::get('/', function () {
    return view('home');
})->name('home');
 
// Resource route untuk Buku
// Bulk Delete
Route::post('/hapus-buku-massal', [BukuController::class, 'bulkDelete'])
     ->name('buku.bulk-delete');


Route::get('/buku/export', [BukuController::class, 'export'])
     ->name('buku.export');

// Resource route untuk Buku
Route::resource('buku', BukuController::class);
 
Route::get('/buku/search', [BukuController::class, 'search'])
    ->name('buku.search');
// Custom route untuk filter kategori
Route::get('/buku/kategori/{kategori}', [BukuController::class, 'filterKategori'])
     ->name('buku.kategori');
 
// Export Excel Anggota
Route::get('/anggota/export', [AnggotaController::class, 'export'])
     ->name('anggota.export');

Route::get('/anggota/search', [AnggotaController::class, 'search'])
     ->name('anggota.search');     
     
// Resource route untuk Anggota (akan dibuat nanti)
Route::resource('anggota', AnggotaController::class);