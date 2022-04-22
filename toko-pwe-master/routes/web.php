<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\EnamController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\LimaController;
use App\Http\Controllers\SatuController;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\TujuhController;
use App\Http\Controllers\DelapanController;
use App\Http\Controllers\SembilanController;


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

Route::get('/Beranda', function () {
    echo ("Ini merupakan halaman beranda");
});

Route::get('/Profil', function () {
    echo ("Ini merupakan halaman profil");
});

Route::get('/Profil/sejarah', function () {
    echo ("Ini merupakan halaman sejarah didalam profil");
});

Route::get('/Profil/Lambang', function () {
    echo ("Ini merupakan halaman lambang didalam profil");
});

Route::get('/Fakultas', function () {
    echo ("Ini merupakan halaman Fakultas");
});

Route::get('/Fakultas/Fakultas HUKUM', function () {
    echo ("Ini merupakan halaman Fakultas HUKUM didalam fakultas");
});

Route::get('/Fakultas/Fakultas Teknik', function () {
    echo ("Ini merupakan halaman Fakultas Teknik didalam fakultas");
});

Route::get('/UNIT', function () {
    echo ("Ini merupakan halaman UNIT");
});

Route::get('/UNIT/UPT', function () {
    echo ("Ini merupakan halaman UPT didalam UNIT");
});

Route::get('/UNIT/UPT/UPT BAHASA', function () {
    echo ("Ini merupakan halaman UPT BAHASA didalam UPT/UNIT");
});
 
Route::get('/jual', [JualController::class, 'awal']);

Route::get('/satu', [SatuController::class, 'awal']);

Route::get('/dua', [DuaController::class, 'awal']);

Route::get('/tiga', [TigaController::class, 'awal']);

Route::get('/empat', [EmpatController::class, 'awal']);

Route::get('/lima', [LimaController::class, 'awal']);

Route::get('/enam', [EnamController::class, 'awal']);

Route::get('/tujuh', [TujuhController::class, 'awal']);

Route::get('/delapan', [DelapanController::class, 'awal']);

Route::get('/sembilan', [SembilanController::class, 'awal']);