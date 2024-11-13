<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | HealUS</title>
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/custom.css">
    <style>
    </style>
</head>
<header>
    <x-navbar></x-navbar>
</header>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column gap-3">
                <div class="row g-3">
                    <div class="col-md-12 box info-box">
                        <h2>Kirimi kami Pesan</h2>
                        <form action="{{ route('messages.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan:</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Kirim Pesan</button>
                        </form>
                        @if (session('success'))
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
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-12 box info-box">
                        <h2>Alamat Perusahaan</h2>
                        <address>
                            <strong>HealUS</strong><br>
                            Jl. Jend. Ahmad Yani No.98, <br>
                            Nagri Tengah, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41114<br>
                            Telepon: (0264) 200724<br>
                            Email: info@healus.com
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7973953299834!2d107.43978037364694!3d-6.547247393445702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e5975014a5d%3A0x87f7a97e7f9f961!2sSMKN%202%20Purwakarta!5e0!3m2!1sid!2sid!4v1725423621018!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <script src="../src/js/bootstrap.bundle.min.js"></script>
    <script src="../src/js/custom.js"></script>
</body>
</html>
