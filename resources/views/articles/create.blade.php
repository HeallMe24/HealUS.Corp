<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Artikel Baru | HealUS</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h1 class="mb-4">Buat Artikel Baru</h1>

            <!-- Menampilkan pesan jika error -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label for="contentarticle" class="form-label">Konten Artikel</label>
                    <textarea class="form-control" id="contentarticle" name="contentarticle" rows="5" required>{{ old('contentarticle') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Upload Thumbnail Artikel</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" required>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Upload Foto Artikel</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>

                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-success">Simpan Artikel</button>
                    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali ke Daftar Artikel</a>
                    @if(Auth::user() && Auth::user()->role == 'admin')
                    <a href="{{ route('articles.table') }}" class="btn btn-secondary">Halaman Tabel</a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('src/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
