<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | HealUS</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/navbar.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 200px; /* Atur tinggi gambar */
            object-fit: cover; /* Membuat gambar tetap dalam proporsi namun memenuhi container */
        }
        
    </style>
</head>
<header>
    <x-navbar></x-navbar>
</header>

<body>

    <a href="{{ route('articles.create') }}" class="btn btn-success mt-3">Tambah Artikel</a>

    <!-- Container untuk daftar artikel -->
    <div class="container mt-5" id="terbaru">
        <h2 class="text-center mb-4" style="background-color: #B5E6C2;">Berita Terbaru</h2>
        <div class="row">
            <!-- Artikel 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl1.jpg" class="card-img-top" alt="Gambar Artikel 1">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Pohon Baru??</h5>
                        <p class="card-text">
                            "Jenis pohon baru 'Agusee' ditemukan secara tak sengaja oleh Agus. Awalnya disangka wajah, pohon unik ini belum pernah tercatat dalam sejarah."

                        </p>
                        <a href="webs/art1.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl2.png" class="card-img-top" alt="Gambar Artikel 2">
                    <div class="card-body">
                        <h5 class="card-title">Bumi akan menjadi neraka? Waktunya menyentuh rumput</h5>
                        <p class="card-text">
                            "Keadaan bumi semakin parah, diperkirakan akan menjadi bola api. Tenang, kami ajarkan Anda menumbuhkan rumput di meja agar tak perlu keluar rumah."
                        </p>
                        <a href="webs/art2.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl3.jpg" class="card-img-top" alt="Gambar Artikel 3">
                    <div class="card-body">
                        <h5 class="card-title">Hijau+Hijau = Lebih Hijau?</h5>
                        <p class="card-text">
                            "Perusahaan kami berkolaborasi dengan NVIDIA! Produk baru, 'Grass Touch AF 300X,' sepetak rumput portabel tanpa kabel, sudah support USB-C, agar Anda bisa menyentuh rumput di kamar."
                        </p>
                        <a href="webs/art3.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div> 
            <!-- Tambahkan lebih banyak artikel sesuai kebutuhan -->
        </div>
    </div>
    <div class="container mt-5" id="trend">
        <h2 class="text-center mb-4" style="background-color: #B5E6C2;">Berita Trend</h2>
        <div class="row">
            <!-- Artikel 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl1.jpg" class="card-img-top" alt="Gambar Artikel 1">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Pohon Baru??</h5>
                        <p class="card-text">
                            "Jenis pohon baru 'Agusee' ditemukan secara tak sengaja oleh Agus. Awalnya disangka wajah, pohon unik ini belum pernah tercatat dalam sejarah."

                        </p>
                        <a href="webs/art1.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl2.png" class="card-img-top" alt="Gambar Artikel 2">
                    <div class="card-body">
                        <h5 class="card-title">Bumi akan menjadi neraka? Waktunya menyentuh rumput</h5>
                        <p class="card-text">
                            "Keadaan bumi semakin parah, diperkirakan akan menjadi bola api. Tenang, kami ajarkan Anda menumbuhkan rumput di meja agar tak perlu keluar rumah."
                        </p>
                        <a href="webs/art2.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/src/img/tl3.jpg" class="card-img-top" alt="Gambar Artikel 3">
                    <div class="card-body">
                        <h5 class="card-title">Hijau+Hijau = Lebih Hijau?</h5>
                        <p class="card-text">
                            "Perusahaan kami berkolaborasi dengan NVIDIA! Produk baru, 'Grass Touch AF 300X,' sepetak rumput portabel tanpa kabel, sudah support USB-C, agar Anda bisa menyentuh rumput di kamar."
                        </p>
                        <a href="webs/art3.html" class="btn btn-success">Baca Selengkapnya</a>
                    </div>
                </div>
            </div> 
            <!-- Tambahkan lebih banyak artikel sesuai kebutuhan -->
        </div>
    </div>

    <!-- Script untuk Bootstrap -->
    <script src="../src/js/bootstrap.bundle.min.js"></script>
</body>
</html>
