<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('/user');

Route::get('user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::post('user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::get('user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::put('user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');
Route::get('user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

// Jobsheet 5_Praktikum 2_langkah 12
Route::get('/kategori', [KategoriController::class, 'index']);

// Jobsheet 5_Praktikum 2_Langkah 1
// Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

// Jobsheet 5_tugas 1
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');

// Jobsheet 5_Tugas 3
Route::get('/kategori', [KategoriController::class, 'index'])->name('/kategori');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('/kategori/edit');
Route::put('/kategori/edit_simpan/{id}', [KategoriController::class, 'edit_simpan'])->name('/kategori/edit_simpan');

// Jobsheet 5_Tugas 4
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('/kategori/hapus');

// Jobsheet 6_Praktikum 1_Soal 9
Route::get('/user/create', [UserController::class, 'create'])->name('/user/create');
Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');

// Jobsheet 6_Praktikum C_Soal 3
Route::post('/level', [LevelController::class, 'store'])->name('/level');
Route::post('/user', [UserController::class, 'store']);

// Jobsheet 6_Praktikum D_Soal 2
Route::resource('m_user', POSController::class);

// Jobsheet 7_Praktikum 2_Soal 5
Route::get('/', [WelcomeController::class, 'index']);