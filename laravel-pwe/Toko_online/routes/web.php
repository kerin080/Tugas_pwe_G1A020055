<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\BajuController;

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
    echo ("Ini halaman dashboard");
});

Route::get('/prodi-fakultas-teknik', function () {
    echo ("Ini halaman prodi fakultas teknik");
});

Route::get('/prodi-fakultas-teknik/prodi-informatika', function () {
    echo ("Ini halaman prodi informatika");
});

Route::get('/prodi-fakultas-teknik/prodi-teknik-sipil', function () {
    echo ("Ini halaman prodi teknik sipil");
});

Route::get('/prodi-fakultas-teknik/prodi-teknik-mesin', function () {
    echo ("Ini halaman prodi teknik mesin");
});

Route::get('/universitas', function () {
    echo ("Ini halaman universita");
});

Route::get('/universitas/universitas-bengkulu', function () {
    echo ("Ini halaman universitas bengkulu");
});

Route::get('/universitas/universitas-indonesia', function () {
    echo ("Ini halaman universitas indonesia");
});

Route::get('/universitas/universitas-negeri-padang', function () {
    echo ("Ini halaman universitas negeri padang");
});

Route::get('/universitas/universitas andalas', function () {
    echo ("Ini halaman universitas andalas");
});

Route::get('/biodata', [BiodataController::class, 'biodata']);
Route::get('/buy', [BuyController::class, 'buy']);
Route::get('/sell', [SellController::class, 'sell']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/customer', [CustomerController::class, 'customer']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/pembayaran', [PembayaranController::class, 'pembayaran']);
Route::get('/barang', [BarangController::class, 'barang']);
Route::get('/diskon', [DiskonController::class, 'diskon']);
Route::get('/baju', [BajuController::class, 'baju']);