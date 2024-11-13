<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gambar | HealUS</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h1 class="mb-4">Edit Gambar</h1>

            <!-- Menampilkan pesan error validasi -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Gambar</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $gallery->title }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Gambar</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $gallery->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe Gambar</label>
                    <select class="form-control" id="tipe" name="tipe" required>
                        <option value="" disabled>Pilih Tipe Gambar</option>
                        <option value="Pohon" {{ $gallery->tipe == 'Pohon' ? 'selected' : '' }}>Pohon</option>
                        <option value="Kerjasama" {{ $gallery->tipe == 'Kerjasama' ? 'selected' : '' }}>Kerjasama</option>
                        <option value="Proses" {{ $gallery->tipe == 'Proses' ? 'selected' : '' }}>Proses</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if ($gallery->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/uploads/galleries/' . $gallery->image) }}" alt="Gambar" width="100">
                        </div>
                    @endif
                </div>

                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-success">Simpan Gambar</button>
                    <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Kembali ke Daftar Galeri</a>
                    @if(Auth::user() && Auth::user()->role == 'admin')
                    <a href="{{ route('galleries.table') }}" class="btn btn-secondary">Halaman Tabel</a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('src/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('src/js/custom.js') }}"></script>
</body>
</html>
