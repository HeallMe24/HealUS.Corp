<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | HealUS</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<header>
    <x-navbar></x-navbar>
</header>

<body>
    <!-- Hero -->
    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../src/img/hero1.png" class="d-block w-100" alt="Dokumentasi Layanan" id="herohom">
                <div class="carousel-caption d-md-block">
                    <h1>Dokumentasi Layanan</h1>
                    <p>Perjalanan kami dalam menanam dan merawat ribuan pohon di seluruh negeri.</p>
                    <a href="{{ url('/galleries') }}" class="btn btn-success">Lihat Galeri</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../src/img/hero2.png" class="d-block w-100" alt="Inovasi Produk" id="herohom" >
                <div class="carousel-caption d-md-block">
                    <h1>Inovasi Produk</h1>
                    <p>Kami menyediakan produk ramah lingkungan untuk mendukung pertumbuhan pohon yang berkelanjutan.</p>
                    <a href="{{ url('/galleries') }}" class="btn btn-success">Jelajahi Produk</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../src/img/hero3.png" class="d-block w-100" alt="Artikel Menarik" id="herohom">
                <div class="carousel-caption d-md-block">
                    <h1>Artikel Menarik</h1>
                    <p>Pelajari lebih lanjut tentang manfaat pohon bagi bumi dan kehidupan kita.</p>
                    <a href="{{ url('/articles') }}" class="btn btn-success">Baca Artikel</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../src/img/hero4.png" class="d-block w-100" alt="Moto Perusahaan" id="herohom">
                <div class="carousel-caption d-md-block">
                    <h1>Bukan Hanya Menyembuhkan DUNIA, Tapi Juga Menyembuhkan KITA</h1>
                    <p>Kami berkomitmen untuk membangun masa depan yang lebih hijau dan sehat bagi generasi mendatang.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </section>

    <!-- Tentang Kami -->
    <section class="about-us container my-5" data-aos="fade-up">
        <h2 class="text-center mb-4">Tentang HealUS</h2>
        <p class="text-muted text-center">
            HealUS adalah perusahaan berbasis lingkungan yang fokus pada penanaman, pemeliharaan pohon, dan penyediaan produk inovatif untuk keberlanjutan alam.
        </p>
    </section>

    <!-- Layanan Kami -->
    <section class="services bg-light py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center mb-4">Layanan Kami</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="service-icon">
                        <img src="../src/img/icon/service1.png" alt="Penanaman Pohon">
                    </div>
                    <h4>Penanaman Pohon</h4>
                    <p>Kami memfasilitasi penanaman pohon untuk memulihkan ekosistem.</p>
                </div>
                <div class="col-md-4">
                    <div class="service-icon">
                        <img src="../src/img/icon/service2.png" alt="Pemeliharaan">
                    </div>
                    <h4>Pemeliharaan Pohon</h4>
                    <p>Perawatan jangka panjang untuk memastikan pohon tumbuh dengan baik.</p>
                </div>
                <div class="col-md-4">
                    <div class="service-icon">
                        <img src="../src/img/icon/service3.png" alt="Konsultasi Pohon">
                    </div>
                    <h4>Konsultasi Pohon</h4>
                    <p>Diskusikan kebutuhan lingkungan Anda dengan para ahli kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="testimonials py-5">
        <div class="container">
            <h2 class="text-center mb-4">Apa Kata Mereka</h2>
            <div class="carousel slide" id="testimonialCarousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <blockquote class="blockquote text-center p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
                            <p class="mb-0">"HealUS memberikan dampak luar biasa bagi lingkungan dan masyarakat."</p>
                            <footer class="blockquote-footer mt-3">Greta Thunberg</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
                            <p class="mb-0">"Inisiatif yang sangat menginspirasi. Saya senang bisa terlibat."</p>
                            <footer class="blockquote-footer mt-3">David Attenborough</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
                            <p class="mb-0">"Menanam pohon bersama HealUS adalah investasi untuk masa depan."</p>
                            <footer class="blockquote-footer mt-3">Leonardo DiCaprio</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
                            <p class="mb-0">"Hijau, Sehijau rank teman saya"</p>
                            <footer class="blockquote-footer mt-3">HealMe</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
                            <p class="mb-0">"Sehijau hijaunya pohon, masih lebih hijau Shalat!"</p>
                            <footer class="blockquote-footer mt-3">Johan</footer>
                        </blockquote>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>
    

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 HealUS. All rights reserved.</p>
        <p>
            <a href="#" class="text-white me-3">Facebook</a>
            <a href="#" class="text-white me-3">Instagram</a>
            <a href="#" class="text-white">Twitter</a>
        </p>
    </footer>

    <!-- Scripts -->
    <script src="../src/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
