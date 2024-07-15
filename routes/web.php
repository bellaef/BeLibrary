<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/Dashboard', [DashboardController::class, 'index'])->name('admin.page');
    Route::resource('bukus', BukuController::class);
    Route::get('/Data_Buku',[BukuController::class,'index'])->name('buku.page');
    Route::resource('users', AdminController::class);
    Route::get('/Data_Admin',[AdminController::class,'index'])->name('dataadmin.page');
    Route::resource('customer', PengunjungController::class);
    Route::get('/Data_Pengunjung', [PengunjungController::class, 'index'])->name('datapengunjung.page');
    Route::get('/Data_Peminjaman',[PeminjamanController::class,'index'])->name('peminjaman.page');
    Route::resource('peminjamans', PeminjamanController::class);
    // Tambahkan route untuk menampilkan profil admin
    Route::get('/admin/profile', [ProfilController::class, 'showProfil'])->name('admin.profile.show');
    // Hapus route duplikat untuk /profile
    Route::get('/profile', [ProfilController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfilController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfilController::class, 'destroy'])->name('profile.destroy');
    Route::get('/Cari_Produk', [BukuController::class, 'search'])->name('products.search');
});

// Route::middleware(['auth', 'isAdmin'])->group(function(){
//     Route::get('/Dashboard',[AdminController::class,'showAdmin'])->name('admin.page');
//     Route::get('/Data_Produk',[ProductController::class,'showProduct'])->name('product.page');
//     Route::get('/Tambah_Produk',[ProductController::class,'showCreate'])->name('addproduct.page');
//     // Route::resource('products', ProductController::class);
//     // Route::post('/Store_Produk', [ProductController::class, 'store'])->name('store.product');
//     // Route::get('/Edit_Produk/{id}', [ProductController::class, 'edit'])->name('edit.product.page');
//     // Route::post('/Update_Produk/{id}', [ProductController::class, 'update'])->name('update.product');
//     // Route::delete('/Delete_Produk/{id}', [ProductController::class, 'destroy'])->name('delete.product');
// });

// Route::middleware(['auth', 'isPelanggan'])->group(function(){
//     Route::get('/pelanggan/index',[PelangganController::class,'showPelanggan'])->name('pelanggan.page');
// });

require __DIR__.'/auth.php';