@extends('layout.app')

{{-- Customize layout sections  --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">

                {{-- Jobsheet 5_Tugas 1 --}}
                <a href="{{route('/kategori/create')}}" class="btn btn-primary">ADD</a>

                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush