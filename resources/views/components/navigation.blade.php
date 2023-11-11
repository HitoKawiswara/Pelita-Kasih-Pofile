<nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    
    <!-- nav container -->
    <div class="container">
        <nav class="navbar">
            <ul class="nav-links">
                <li class="nav-link">
                    <a class="active" href="#">Beranda</a>
                </li>
                <li class="nav-link services">
                    <a href="#">profil
                        <span class="material-icons dropdown-icon">
                            arrow_drop_down
                        </span>
                    </a>
                    <ul class="drop-down">
                        <li>Tentang Kami</li>
                        <li>Visi & Misi</li>
                    </ul>
                </li>
                <li class="nav-link services">
                    <a href="#">Akademik
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul class="drop-down">
                    <li>Taman Kana-Kanak</li>
                    <li>Sekolah Dasar</li>
                    <li>Sekolah Menengah Pertama</li>
                    <li>Sekolah Menengah Atas</li>
                </ul>
                </li>
                <li class="nav-link services">
                    <a href="#">Fasilitas
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul class="drop-down">
                    <li>Lapangan Olahraga</li>
                    <li>Perpustakaan</li>
                    <li>Laboratorium</li>
                    <li>Aula</li>
                </ul>
                </li>
                <li class="nav-link services">
                    <a href="#">Struktur Sekolah
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul class="drop-down">
                    <li>Biodata Staff</li>
                    <li>Biodata Guru</li>
                </ul>
                </li>
                <li class="nav-link services">
                    <a href="#">Ekstrakulikuler
                    <span class="material-icons dropdown-icon">
                        arrow_drop_down
                    </span>
                </a>
                <ul class="drop-down">
                    <li>Basket</li>
                    <li>Sepakbola</li>
                    <li>Bulu Tangkis</li>
                    <li>Voli</li>
                </ul>
                </li>
            </ul>
        </nav>
    </div>
    <script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
</nav>