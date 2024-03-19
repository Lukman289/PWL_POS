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
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Level Kode</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Level Kode">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Level Nama</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Level Nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- /input-group -->
    </div>
<!-- /.card-body -->
</div>
@endsection