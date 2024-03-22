<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;

class KategoriController extends Controller
{
    // public function index() {
    //     // $data = [
    //     //     'kategori_kode' => 'SNK',
    //     //     'kategori_nama' => 'Snack/Makanan Ringan',
    //     //     'created_at' => now(),
    //     // ];
    //     // DB::table('m_kategori')->insert($data);
    //     // return 'Insert data baru berhasil';

    //     // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //     // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

    //     // $data = DB::table('m_kategori')->get();
    //     // return view('kategori', ['data' => $data]);

    // }
    
    // Jobsheet 5_Praktikum 2_langkah 10
    public function index(KategoriDataTable $dataTable) {
        return $dataTable->render('kategori.index');
    }

    public function create() {
        return view('kategori.create');
    }

    // public function store(Request $request) {
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kodeKategori,
    //         'kategori_nama' => $request->namaKategori,
    //     ]);
    //     return redirect('/kategori');
    // }

    public function edit($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $kategori]);
    }

    public function edit_simpan($id, Request $request)
    {
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();
        return redirect('/kategori');
    }

    public function hapus($id) {
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }

    // Jobsheet 6_Praktikum 2_Soal 3
    // public function store(Request $request) : RedirectResponse {
        
    //     // Jobsheet 6_Praktikum 2_Soal 4
    //     // $validate = $request->validate([
    //     //     'kategori_kode' => ['required', 'max:2'],
    //     //     'kategori_nama' => ['required', 'min:3'],
    //     // ]);
    //     // $validate = $request->validateWithBag('post', [
    //     //     'kategori_kode' => ['required', 'max:2'],
    //     //     'kategori_nama' => ['required', 'min:3'],
    //     // ]);

    //     // Jobsheet 6_Praktikum 2_Soal 6
    //     $validate = $request->validate([
    //         'kategori_kode' => 'bail|required|max:2',
    //         'kategori_nama' => 'required|min:15',
    //     ]);
        
    //     // The post is valid
    //     return redirect('/kategori');
    // }


    // Jobsheet 6_Praktikum C_Soal 2
    public function store(StorePostRequest $request) : RedirectResponse {
        // The incoming request is valid

        // Retrieve the validated input data
        $validated = $request->validated();

        // Retrieve a portion of the validated input data
        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

        // Store the post

        return redirect('/kategori');
    }
}
