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
    <!-- Kotak kuning dan hijau di sebelah kanan layar -->
    <div class="container-box">
        <div class="box-menu">
            <!-- Tombol Menu -->
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
            <button class="btn btn-light btn-small" id="btn-upload">
                <img src="../src/img/icon/upload.png" id="tmbl">
                <span class="d-none d-sm-inline">Upload</span>
            </button>
            
            
        </div>
        <div class="box-gallery">
            <!-- Kotak putih di dalam kotak kuning -->
            <div class="box-white">
                <div class="box-white-header d-flex justify-content-between align-items-center">
                    <span>Galeri</span>
                    <a><img src="../src/img/icon/sort.png" style="height: 25px;"></a>
                </div>               
                <div class="photo-grid">
                    <!-- Kotak foto di dalam kotak putih -->
                    <img src="/src/img/pohon01.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/pohon01.png" data-photo-title="Toge" data-photo-description="Pohon Terbesar di dunia">
                    <img src="/src/img/pohon04.jpeg" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/pohon04.jpeg" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/kerjasama02.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/kerjasama02.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/proses01.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/proses01.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/proses02.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/proses02.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/pohon03.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/pohon03.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/kerjasama03.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/kerjasama03.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/proses03.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/proses03.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/pohon02.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/pohon02.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <img src="/src/img/kerjasama02.png" alt="Foto" data-bs-toggle="modal" data-bs-target="#photoModal" data-photo-src="/src/img/kerjasama02.png" data-photo-title="Judul Foto" data-photo-description="Deskripsi Foto">
                    <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk menampilkan foto -->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <!-- Tombol close (x) di luar modal -->
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Script untuk mengatur konten modal
        document.addEventListener('DOMContentLoaded', function () {
            var photoModal = document.getElementById('photoModal');
            var modalImage = document.getElementById('modalImage');
            var modalTitle = document.getElementById('modalTitle');
            var modalDescription = document.getElementById('modalDescription');

            photoModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget; // Tombol yang mengaktifkan modal
                var photoSrc = button.getAttribute('data-photo-src');
                var photoTitle = button.getAttribute('data-photo-title');
                var photoDescription = button.getAttribute('data-photo-description');

                modalImage.src = photoSrc;
                modalTitle.textContent = photoTitle;
                modalDescription.textContent = photoDescription;
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
    var photoGrid = document.querySelector('.photo-grid');
    var allPhotos = Array.from(photoGrid.children);
    var currentFilter = 'all'; // Menyimpan filter yang aktif saat ini

    function filterPhotos(category) {
        allPhotos.forEach(function(photo) {
            if (category === 'all' || photo.src.includes(category)) {
                photo.style.display = 'block';
            } else {
                photo.style.display = 'none';
            }
        });
    }

    function handleFilterClick(filterCategory) {
        if (currentFilter === filterCategory) {
            filterPhotos('all'); // Menampilkan semua foto jika filter yang sama ditekan
            currentFilter = 'all'; // Reset filter aktif
        } else {
            filterPhotos(filterCategory);
            currentFilter = filterCategory; // Set filter aktif baru
        }
    }

    document.getElementById('btn-pohon').addEventListener('click', function() {
        handleFilterClick('pohon0');
    });

    document.getElementById('btn-proses').addEventListener('click', function() {
        handleFilterClick('proses0');
    });

    document.getElementById('btn-kerjasama').addEventListener('click', function() {
        handleFilterClick('kerjasama0');
    });
});

    </script>
    <script src="../src/js/custom.js"></script>
</body>
</html>
