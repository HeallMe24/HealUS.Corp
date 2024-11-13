<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Galeri | HealUS</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <!-- Shorcut -->
        <a href="{{ route('galleries.index') }}" class="btn btn-secondary mb-3">Halaman Galeri</a>
        <a href="{{ route('galleries.create') }}" class="btn btn-primary mb-3 ml-3">Tambah Foto</a>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Halaman Dashboard</a>
        
        <h2 class="text-center mb-4">Daftar Galeri</h2>

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
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tipe</th>
                    <th>Gambar</th>
                    <th>Ditambahkan</th>
                    <th>Terakhir Diubah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($galleries as $gallery)
                    <tr>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->description }}</td>
                        <td>{{ $gallery->tipe }}</td>
                        <td>
                            @if($gallery->image)
                                <img src="{{ asset('storage/uploads/galleries/' . $gallery->image) }}" alt="{{ $gallery->title }}" width="100">
                            @else
                                Tidak ada Foto
                            @endif
                        </td>
                        <td>{{ $gallery->created_at->format('d M Y H:i') }}</td>
                        <td>{{ $gallery->updated_at->format('d M Y H:i') }}</td>
                        <td>
                            <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Admin Only -->
                            <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Delete</button>
                            </form>
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
