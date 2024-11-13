<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | HealUS</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/custom.css">
    <style>
   </style>
</head>
<header>
    <x-navbar></x-navbar>
</header>

<body>

    <div class="container-box">
        <div class="box-menu">
            <button class="btn btn-light btn-small" id="btn-pohon">
                <img src="../src/img/icon/phn.png" id="tmbl">
                <span class="d-none d-sm-inline">Pohon</span>
            </button>
            <button class="btn btn-light btn-small" id="btn-proses">
                <img src="../src/img/icon/pro.png" id="tmbl">
                <span class="d-none d-sm-inline">Proses</span>
            </button>
            <button class="btn btn-light btn-small" id="btn-kerjasama">
                <img src="../src/img/icon/int.png" id="tmbl">
                <span class="d-none d-sm-inline">Kerjasama</span>
            </button>
            <a href="{{ route('galleries.create') }}" class="btn btn-light btn-small" id="btn-upload">
                <img src="../src/img/icon/upload.png" id="tmbl" alt="Upload Icon">
                <span class="d-none d-sm-inline">Upload</span>
            </a>            
        </div>
        
        <div class="box-gallery">
            <div class="box-white">
                <div class="box-white-header d-flex justify-content-between align-items-center">
                    <span>Galeri</span>
                    <a><img src="../src/img/icon/sort.png" style="height: 25px;"></a>
                </div>
                
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

                <div class="photo-grid">
                    @foreach($galleries as $gallery)
                        <div class="photo-item" 
                             data-bs-toggle="modal" 
                             data-bs-target="#photoModal"
                             data-photo-src="{{ $gallery->image_url }}"
                             data-photo-title="{{ $gallery->title }}"
                             data-photo-description="{{ $gallery->description }}"
                             data-tipe="{{ $gallery->tipe }}">
                            <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}" class="img-fluid">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Foto -->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Tombol close -->
                <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal" aria-label="Close"></button>
                <img id="modalImage" src="" alt="Foto Besar" class="img-fluid rounded">
                <div class="p-3">
                    <h5 id="modalTitle">Judul Foto</h5>
                    <p id="modalDescription">Deskripsi Foto</p>
                </div>
            </div>
        </div>
    </div>

    <script src="../src/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('src/js/custom.js') }}"></script>
</body>
</html>
