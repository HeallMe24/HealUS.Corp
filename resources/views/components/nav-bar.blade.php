<link rel="icon" href="{{ asset('src/img/icon/logo_w.png') }}" type="image/png">

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid d-flex align-items-center">
        <!-- Logo -->
        <a class="navbar-brand me-auto" href="#">
            <img src="/src/img/icon/logo.png" alt="Logo" height="40" id="logo">
        </a>

        <!-- Toggler menu hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Icon-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        <img src="../src/img/icon/home.png" alt="Home" id="icon">
                        <span class="icon-text"><b>Beranda</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galleries">
                        <img src="../src/img/icon/gal.png" alt="Galeri" id="icon">
                        <span class="icon-text"><b>Galeri</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">
                        <img src="../src/img/icon/news.png" alt="Artikel" id="icon">
                        <span class="icon-text"><b>Artikel</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">
                        <img src="../src/img/icon/cont.png" alt="Kontak" id="icon">
                        <span class="icon-text"><b>Kontak</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">
                        <img src="../src/img/icon/inf.png" alt="Info" id="icon">
                        <span class="icon-text"><b>Info</b></span>
                    </a>
                </li>
                @if(Auth::user() && Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <img src="../src/img/icon/dashboard.png" alt="Dashboard" id="icon">
                        <span class="icon-text"><b>Dashboard</b></span>
                    </a>
                </li>
                @endif
            </ul>

 

                <!-- Profile Dropdown -->
                <div class="dropdown ms-2">
                    <a href="#" class="profile-icon" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../src/img/icon/profile.png" alt="Profile">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}" >Info Akun</a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
