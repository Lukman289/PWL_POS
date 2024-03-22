@extends('layout.app')
{{-- Customize layout sections  --}}
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Level')
{{-- Content bodu:main page content  --}}
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Input Level</h3>
    </div>
    <form method="POST" action="../level">
        @csrf
        <div class="card-body">
            <div class="form-group @error('levelKode') is-invalid @enderror">
                <label for="levelKode">Level Kode</label>
                <input type="text" class="form-control" id="levelKode" placeholder="Level Kode">
                @error('level_kode')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group @error('levelNama') is-invalid @enderror">
                <label for="levelNama">Level Nama</label>
                <input type="text" class="form-control" id="levelNama" placeholder="Level Nama">
                @error('level_nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- /input-group -->
        </div>
    </form>
<!-- /.card-body -->
</div>
@endsection