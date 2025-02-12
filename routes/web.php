<?php

use App\Http\Controllers\Auth\LoginPetugasController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\DataPeminjamController;
use App\Http\Controllers\DataPetugasController;
use App\Http\Controllers\KategoriBukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DataPeminjamanController;

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

Route::redirect('/', '/login');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login-admin', function () {
    return view('admin.login');
})->name('login-admin');
Route::post('/login-admin', [LoginController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login-petugas', function () {
    return view('petugas.login');
})->name('login-petugas');
Route::post('/login-petugas', [LoginPetugasController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login-peminjam', function () {
    return view('peminjam.login');
})->name('login-peminjam');
Route::post('/login-peminjam', [LoginPetugasController::class, 'loginPeminjam']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/index', [IndexController::class, 'index'])->name('admin.index');

    Route::get('/data-admin', [DataAdminController::class, 'index'])->name('admin.dataadmin.index');
    Route::get('/data-admin/create', [DataAdminController::class, 'create'])->name('admin.dataadmin.create');
    Route::post('/data-admin', [DataAdminController::class, 'store'])->name('admin.dataadmin.store');
    Route::delete('/data-admin/{id}', [DataAdminController::class, 'destroy'])->name('admin.dataadmin.destroy');
    Route::put('data-admin/{id}/edit', [DataAdminController::class, 'update'])->name('admin.dataadmin.update');

    Route::get('/data-petugas', [DataPetugasController::class, 'index'])->name('admin.datapetugas.index');
    Route::get('/data-petugas/create', [DataPetugasController::class, 'create'])->name('admin.datapetugas.create');
    Route::post('/data-petugas', [DataPetugasController::class, 'store'])->name('admin.datapetugas.store');
    Route::delete('/data-petugas/{id}', [DataPetugasController::class, 'destroy'])->name('admin.datapetugas.destroy');
    Route::put('data-petugas/{id}/edit', [DataPetugasController::class, 'update'])->name('admin.datapetugas.update');

    Route::get('/data-peminjam', [DataPeminjamController::class, 'index'])->name('admin.datapeminjam.index');
    Route::get('/data-peminjam/create', [DataPeminjamController::class, 'create'])->name('admin.datapeminjam.create');
    Route::post('/data-peminjam', [DataPeminjamController::class, 'store'])->name('admin.datapeminjam.store');
    Route::delete('/data-peminjam/{id}', [DataPeminjamController::class, 'destroy'])->name('admin.datapeminjam.destroy');
    Route::put('data-peminjam/{id}/edit', [DataPeminjamController::class, 'update'])->name('admin.datapeminjam.update');

    Route::get('/data-buku', [DataBukuController::class, 'index'])->name('admin.databuku.index');
    Route::get('/data-buku/create', [DataBukuController::class, 'create'])->name('admin.databuku.create');
    Route::post('/data-buku', [DataBukuController::class, 'store'])->name('admin.databuku.store');
    Route::delete('/data-buku/{id}', [DataBukuController::class, 'destroy'])->name('admin.databuku.destroy');
    Route::put('data-buku/{id}/edit', [DataBukuController::class, 'update'])->name('admin.databuku.update');

    Route::get('/data-peminjamanan', [DataPeminjamanController::class, 'index'])->name('admin.datapeminjaman.index');
    Route::get('/kategori-buku', [KategoriBukuController::class, 'index'])->name('admin.kategoribuku.index');
});

Route::middleware(['auth', 'role:petugas'])->group(function () {
    Route::get('/index-petugas', [IndexController::class, 'indexPetugas'])->name('petugas.index');
    Route::get('/data-buku-petugas', [DataBukuController::class, 'indexPetugas'])->name('petugas.databuku.index');
    Route::get('/data-peminjamanan-petugas', [DataPeminjamanController::class, 'indexPetugas'])->name('petugas.datapeminjaman.index');
    Route::get('/kategori-buku-petugas', [KategoriBukuController::class, 'indexPetugas'])->name('petugas.kategoribuku.index');
});
