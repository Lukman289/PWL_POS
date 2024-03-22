@extends('layout.app')
{{-- Customize layout sections  --}}
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'User')
{{-- Content bodu:main page content  --}}
@section('content')
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Input User</h3>
    </div>
    <form method="POST" action="../user">
      @csrf
      <div class="card-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="text" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
          </div>
          <input type="text" class="form-control" id="levelId" name="levelId" placeholder="Level">
        </div>
        @error('level_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- /input-group -->
      </div>
    </form>
    <!-- /.card-body -->
  </div>
@endsection