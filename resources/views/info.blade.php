<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | HealUS</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/custom.css">
</head>
<body>
    <header>
        <x-navbar></x-navbar>
    </header>

    <!-- Tentang -->
    <section class="inf-hero" style="position: relative; background-image: url('../src/img/bginfo.png'); background-size: cover; background-position: center; height: 400px;">
        <div class="overlay"></div>
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="text-center text-white">
                <h1 class="display-3 font-weight-bold">Tentang  <img src="{{ asset('src/img/icon/logo_q.png') }}" alt="HealUS Logo" style="width: 250px; margin-bottom: 10px;"></h1>
                <p class="lead">HealUS adalah perusahaan yang berkomitmen untuk menciptakan lingkungan yang lebih baik melalui penanaman pohon dan perawatan yang berkelanjutan. Kami percaya bahwa kesehatan planet kita berhubungan langsung dengan kesejahteraan manusia.</p>
            </div>
        </div>
    </section>
    
    <!-- Agents Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center inf-section-title">Tim Kami</h2>
            <div class="row text-center justify-content-center flex-wrap">
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card h-100 border-0 shadow">
                        <img src="../src/img/agents/ag2.png" class="img-fluid inf-img-original-size" alt="Agent 2">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Hilmy ES</h5>
                            <p class="card-text">Good Advisor</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card h-100 border-0 shadow">
                        <img src="../src/img/agents/ag3.png" class="img-fluid inf-img-original-size" alt="Agent 3">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Hilmy API</h5>
                            <p class="card-text">Bad Advisor</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card h-100 border-0 shadow">
                        <img src="../src/img/agents/ag4.png" class="img-fluid inf-img-original-size" alt="Agent 4">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Hilmy Kegelapan</h5>
                            <p class="card-text">Background Officers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card h-100 border-0 shadow">
                        <img src="../src/img/agents/ag5.png" class="img-fluid inf-img-original-size" alt="Agent 5">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Hilmy Keterangan</h5>
                            <p class="card-text">Frontground Officers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card h-100 border-0 shadow">
                        <img src="../src/img/agents/ag1.png" class="img-fluid inf-img-original-size" alt="Hilmy HIJAU">
                        <div class="card-body">
                            <h5 class="card-title mt-3">Hilmy HIJAU</h5>
                            <p class="card-text">Chief Executive Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!--Kolaborasi -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center inf-section-title">Kerjasama Kami</h2>
            <div class="row text-center justify-content-center flex-wrap">
                <div class="col-md-3 mb-4">
                    <img src="../src/img/colab/PE.png" class="collab-image" alt="Company 1">
                    <h5 class="mt-3">Company 1</h5>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="../src/img/colab/UM.png" class="collab-image" alt="Company 2">
                    <h5 class="mt-3">Company 2</h5>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- Achievements Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center inf-section-title">Pencapaian Kami</h2>
            <div class="row text-center justify-content-center flex-wrap">
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card achieve-card border-0 shadow h-100">
                        <img src="../src/img/reward/2010.png" class="img-fluid inf-img-original-size" alt="Award 2010">
                        <div class="card-body text-white">
                            <h5 class="mb-5">Terbaik 2010</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card achieve-card border-0 shadow h-100">
                        <img src="../src/img/reward/2023.png" class="img-fluid inf-img-original-size" alt="Award 2023">
                        <div class="card-body text-white">
                            <h5 class="mb-5">Terbaik 2023</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="inf-card achieve-card border-0 shadow h-100">
                        <img src="../src/img/reward/2023_2.png" class="img-fluid inf-img-original-size" alt="Award 2023">
                        <div class="card-body text-white">
                            <h5 class="mb-5">Terpercaya 2023</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../src/js/bootstrap.bundle.min.js"></script>
</body>
</html>
