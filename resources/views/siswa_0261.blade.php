@extends('layouts.app_0261')

@section('title', 'Siswa')

@section('content')
    <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-4 mt-4">Tambah Siswa</a>
    <form action="{{ route('siswa.index') }}" method="GET">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" value="{{ request()->get('query') }}" placeholder="Ketik Pencarian" aria-label="Username" aria-describedby="basic-addon1" name="query">
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-success" type="submit">FILTER</button>
        </div>
    </form>

    <h2>TABEL SISWA</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">NAMA SISWA</th>
            <th scope="col">KELAS</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $siswa)
            <tr>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>
                    <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-info btn-sm">EDIT</a>
                    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">HAPUS</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
