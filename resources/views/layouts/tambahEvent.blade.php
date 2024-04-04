@extends('main')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<a href="/" class="fs-6 fw-medium " id="back-form"><i class="fa-solid fa-arrow-left"></i>  Kembali</a>

<h1 class="d-flex justify-content-center align-items-center mb-4 mt-5">Tambah Event</h1>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="post" action="{{ route('tambahEvent.simpan') }}" class="border border-1 shadow-sm p-4 rounded-3 mb-5">
                @csrf 
                <div class="mb-3">
                    <label for="title" class="form-label fs-6 fw-medium">Judul Event:</label><br>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="title" id="title" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan judul">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fs-6 fw-medium">Deskripsi:</label><br>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea name="description" id="description" class="form-control" cols="10" rows="4" placeholder="Masukkan deskripsi"></textarea>
                </div>
                <div id="dropdown"class="mb-3">
                    <label for="dropdown" class="form-label fs-6 fw-medium">Kategori Olahraga</label><br>
                    @include('components.dropdown')
                </div>
                <div id="date" class="mb-3">
                    <label for="date" class="form-label fs-6 fw-medium">Tanggal</label><br>
                    @include('components.date')
                </div>
                <div id="location" class="mb-3">
                    <label for="location" class="form-label fs-6 fw-medium">Lokasi</label><br>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Masukkan lokasi">
                </div>
                <div id="image" class="mb-3">
                    <label for="image" class="form-label fs-6 fw-medium">Gambar</label><br>    
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div id="daftar" class="mb-3">
                    <label for="daftar" class="form-label fs-6 fw-medium">Link Web atau Pendaftaran</label><br>
                    <input type="text" name="daftar" id="daftar" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan link">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection