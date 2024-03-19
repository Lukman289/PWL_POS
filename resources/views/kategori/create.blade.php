@extends('layout.app')
{{-- Customize layout sections  --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Kategori')
{{-- Content bodu:main page content  --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="car-title">Buat kategori baru</h3>
            </div>

            <form method="POST" action="../kategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="Kode Kategori">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="Nama Kategori">
                    </div>
                </div>

                {{-- Jobsheet 6_Praktikum 2_Soal 10 --}}
                <label for="kategori_kode">Kode Kategori</label>
                <input type="text" 
                    id="kategori_kode"
                    name="kategori_kode"
                    class="@error('kategori_kode') is-invalid @enderror">
            
                    @error('kategori_kode')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                <div class="card-footer">
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Jobsheet 6_Praktikum 2_Soal 7 --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection