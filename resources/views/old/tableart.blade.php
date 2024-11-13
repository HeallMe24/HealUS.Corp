@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Artikel</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Dibuat Pada</th>
                <th>Jumlah Like</th>
                @if(Auth::user() && Auth::user()->role === 'admin')
                    <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('images/' . $article->thumbnail) }}" alt="Thumbnail" width="100"></td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->author }}</td>
                <td>{{ $article->created_at->format('d-m-Y') }}</td>
                <td>{{ $article->likes }}</td>
                @if(Auth::user() && Auth::user()->role === 'admin')
                <td>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
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

    <a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel</a>
</div>
@endsection
