<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Table | HealUS</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">
</head>
<body>
    <div class="container mt-5">
                <!-- Shortcut -->
                <a href="{{ route('articles.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Artikel</a>
                <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3 ml-3">Tambah Artikel</a>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Halaman Dashboard</a>
        <h2 class="text-center mb-4">Daftar Artikel</h2>

        @if(session('success'))
        <div class="toast-container position-fixed top-50 start-50 translate-middle p-3">
            <div id="uploadToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Thumbnail</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Foto</th>
                    <th>Isi Artikel</th>
                    <th>Jumlah Like</th>
                    <th>Dibuat</th>
                    <th>Terakhir Diubah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>
                            @if ($article->thumbnail)
                                <img src="{{ asset('storage/uploads/articles/thumbnail/' . $article->thumbnail) }}" alt="Thumbnail" width="100">
                            @else
                                Tidak ada thumbnail
                            @endif
                        </td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->author }}</td>
                        <td>
                            @if ($article->photo)
                                <img src="{{ asset('storage/uploads/articles/photo/' . $article->photo) }}" alt="Photo" width="100">
                            @else
                                Tidak ada foto
                            @endif
                        </td>
                        <td>{{ $article->contentarticle }}</td>
                        <td>{{ $article->likes }}</td>
                        <td>{{ $article->created_at->format('d M Y') }}</td>
                        <td>{{ $article->updated_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                            @if(Auth::user() && Auth::user()->role == 'admin')
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('src/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('src/js/custom.js') }}"></script>
</body>
</html>
