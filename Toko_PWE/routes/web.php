<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeliController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\MakananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    echo ("Selamat datang di halaman dashboard");
});

Route::get('/biro-dan-lembaga', function () {
    echo ("Selamat datang di halaman Biro dan Lembaga");
});

Route::get('/biro-dan-lembaga/biro-PPK', function () {
    echo ("Selamat datang di halaman Biro PPK");
});

Route::get('/biro-dan-lembaga/biro-USD', function () {
    echo ("Selamat datang di halaman Biro USD");
});

Route::get('/biro-dan-lembaga/LPTIK', function () {
    echo ("Selamat datang di halaman LPTIK");
});

Route::get('/fakultas', function () {
    echo ("Selamat datang di halaman Fakultas");
});

Route::get('/fakultas/fakultas-hukum', function () {
    echo ("Selamat datang di halaman Fakultas Hukum");
});

Route::get('/fakultas/fakultas-teknik', function () {
    echo ("Selamat datang di halaman Fakultas Teknik");
});

Route::get('/fakultas/fakultas-ekonomi-dan-bisnis', function () {
    echo ("Selamat datang di halaman Fakultas Ekonomi dan Bisnis");
});

Route::get('/fakultas/fakultas-kedokteran', function () {
    echo ("Selamat datang di halaman Fakultas Kedokteran");
});

Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/beli', [BeliController::class, 'beli']);
Route::get('/jual', [JualController::class, 'jual']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/pelanggan', [PelangganController::class, 'pelanggan']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/pembayaran', [PembayaranController::class, 'pembayaran']);
Route::get('/barang', [BarangController::class, 'barang']);
Route::get('/promo', [PromoController::class, 'promo']);
Route::get('/makanan', [MakananController::class, 'makanan']);