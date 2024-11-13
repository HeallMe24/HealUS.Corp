@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Galeri Foto</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Dibuat Pada</th>
                @if(Auth::user() && Auth::user()->role === 'admin')
                    <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('images/' . $gallery->image) }}" alt="Gambar" width="100"></td>
                <td>{{ $gallery->title }}</td>
                <td>{{ $gallery->description }}</td>
                <td>{{ $gallery->created_at->format('d-m-Y') }}</td>
                @if(Auth::user() && Auth::user()->role === 'admin')
                <td>
                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('galleries.create') }}" class="btn btn-primary">Tambah Gambar</a>
</div>
@endsection
