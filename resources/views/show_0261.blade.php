@extends('layouts.app_0261')

@section('title', 'Edit Biodata Siswa')

@section('content')
    <h1 class="mt-4 mb-4">EDIT NAMA SISWA</h1>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{ $data->siswa }}" placeholder="Masukan Nama Siswa" aria-label="Username" aria-describedby="basic-addon1" name="nama_siswa">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{ $data->siswa }}" placeholder="Masukan Kelas" aria-label="Username" aria-describedby="basic-addon1" name="Kelas">
        </div>
        <div class="input-group">
            <button class="btn btn-success" type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
