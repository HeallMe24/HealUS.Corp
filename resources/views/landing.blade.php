<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | HealUS</title>
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
</head>
<body style="background-image: url('{{ asset('src/img/bglanding.gif') }}'); heig ht: 100vh; background-size: cover; background-position: center;">
    <div class="container-fluid p-0">
            <div class="bg-gradient opacity-75" style="height: 100vh;">
                <div class="container text-center mt-5 h-100 d-flex justify-content-center align-items-center">
                    <div class="bg-white rounded p-5 shadow" style="background-color: rgba(255, 255, 255, 0.8);">
                        <h1 class="d-flex justify-content-center align-items-center">
                            Selamat Datang di
                            <img src="{{ asset('src/img/icon/logo_q.png') }}" alt="HealUS Logo" style="width: 150px; margin-left: 10px;">
                        </h1>
                        <p>Tolong Login atau Daftar akun baru untuk melanjutkan</p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="{{ route('login') }}" class="btn btn-primary me-2">Log In</a>
                            <a href="{{ route('register') }}" class="btn btn-secondary">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('src/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>