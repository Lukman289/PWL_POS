<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    // public function index() {
    //     // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(? ,? ,?)', ['cus', 'Pelanggan', now()]);
    //     // return 'insert data baru berhasil';

    //     // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
    //     // return 'update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

    //     // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
    //     // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

    //     $data = DB::select('select * from m_level');
    //     return view('level', ['data' => $data]);
    // }

    public function index(LevelDataTable $dataTable) {
        return $dataTable->render('level.index');
    }

    public function create() {
        return view('level.create');
    }

    // Jobsheet 6_Praktikum C_Soal 3
    public function store(StorePostRequest $request) : RedirectResponse {
        // The incoming request is valid

        // Retrieve the validated input data
        $validated = $request->validated();

        // Retrieve a portion of the validated input data
        $validated = $request->safe()->only(['levelKode', 'levelNama']);
        $validated = $request->safe()->except(['levelKode', 'levelNama']);

        // Store the post

        return redirect('/level');
    }
}
