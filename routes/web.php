<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user', [UserController::class, 'index'])->name('/user');
// Route::get('user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
// Route::post('user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
// Route::get('user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
// Route::put('user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');
// Route::get('user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
// Jobsheet 5_Praktikum 2_langkah 12
// Route::get('/kategori', [KategoriController::class, 'index']);
// Jobsheet 5_Praktikum 2_Langkah 1
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
// Jobsheet 5_tugas 1
// Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');
// Jobsheet 5_Tugas 3
// Route::get('/kategori', [KategoriController::class, 'index'])->name('/kategori');
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('/kategori/edit');
// Route::put('/kategori/edit_simpan/{id}', [KategoriController::class, 'edit_simpan'])->name('/kategori/edit_simpan');
// Jobsheet 5_Tugas 4
// Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('/kategori/hapus');
// Jobsheet 6_Praktikum 1_Soal 9
// Route::get('/user/create', [UserController::class, 'create'])->name('/user/create');
// Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');
// Jobsheet 6_Praktikum C_Soal 3
// Route::post('/level', [LevelController::class, 'store'])->name('/level');
// Route::post('/user', [UserController::class, 'store']);
// Jobsheet 6_Praktikum D_Soal 2
// Route::resource('m_user', POSController::class);

// Jobsheet 7_Praktikum 2_Soal 5
Route::get('/', [WelcomeController::class, 'index']);

// Jobsheet 7_Praktikum 3_Soal 3
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // menampikna halaman form edit ser
    Route::put('/{id}', [UserController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [LevelController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [LevelController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [LevelController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // menampikna halaman form edit ser
    Route::put('/{id}', [LevelController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [BarangController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [BarangController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [BarangController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampikna halaman form edit ser
    Route::put('/{id}', [BarangController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [BarangController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [KategoriController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [KategoriController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [KategoriController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // menampikna halaman form edit ser
    Route::put('/{id}', [KategoriController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [StokController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [StokController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [StokController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [StokController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [StokController::class, 'edit']);  // menampikna halaman form edit ser
    Route::put('/{id}', [StokController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [StokController::class, 'destroy']); // menghapus data user
});

Route::group(['prefix' => 'transaksi'], function () {
    Route::get('/', [TransaksiController::class, 'index']);          // menampilkan halaman awal user
    Route::post('/list', [TransaksiController::class, 'list']);      // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [TransaksiController::class, 'create']);   // menampilkan halaman form tambah user
    Route::post('/', [TransaksiController::class, 'store']);         // menyimpan data user baru
    Route::get('/{id}', [TransaksiController::class, 'show']);       // menampilkan detail user
    Route::get('/{id}/edit', [TransaksiController::class, 'edit']);  // menampikna halaman form edit ser
    Route::put('/{id}', [TransaksiController::class, 'update']);     // menyimpan perubahan data user
    Route::delete('/{id}', [TransaksiController::class, 'destroy']); // menghapus data user
});