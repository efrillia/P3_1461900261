@extends('layouts.app_0261')

@section('title', 'Tambah Siswa')

@section('content')
    <h1 class="mt-4 mb-4">TAMBAH SISWA</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Masukan Nama Siswa" aria-label="Username" aria-describedby="basic-addon1" name="Siswa">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Masukan Kelas" aria-label="Username" aria-describedby="basic-addon1" name="kelas">
        </div>
        <div class="input-group">
            <button class="btn btn-success" type="submit">SIMPAN</button>
        </div>
    </form>
@endsection
